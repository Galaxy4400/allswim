<?php
require_once 'aff.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	http_response_code(405);
	echo json_encode(['success' => false, 'error' => 'Method not allowed']);
	exit;
}

define("INVALID_AUTH_ERROR_CODE", "invalid_auth");
define("INVALID_PARAMS_ERROR_CODE", "invalid_params");
define("LEAD_DECLINED_ERROR_CODE", "lead_declined");

$log_entry = array();

function generate_password()
{
	$length = rand(8, 12);

	$lowercase = 'abcdefghijklmnopqrstuvwxyz';
	$uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$digits = '0123456789';
	$all = $lowercase . $uppercase . $digits;

	$password = '';
	$password .= $lowercase[rand(0, strlen($lowercase) - 1)];
	$password .= $uppercase[rand(0, strlen($uppercase) - 1)];
	$password .= $digits[rand(0, strlen($digits) - 1)];

	for ($i = 3; $i < $length; $i++) {
		$password .= $all[rand(0, strlen($all) - 1)];
	}

	$password = str_shuffle($password);

	return $password;
}


function logRequest($data)
{
	if ($_SERVER['SERVER_PORT'] == 8080) {
		return;
	}

	$publicHtmlPath = __DIR__ . '/../';
	$logDir = $publicHtmlPath . 'logs';
	if (!is_dir($logDir)) {
		mkdir($logDir, 0755, true);
	}
	$logFile = $logDir . '/' . date('Y-m-d') . '.log';
	file_put_contents($logFile, date('Y-m-d H:i:s') . ' - ' . json_encode($data) . PHP_EOL, FILE_APPEND);
}


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['full_phone'];
$country_phone_code = $_POST['country_code'];
$phone_short = $_POST['phone'];
$geo = $_POST['geo'];

$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
$ipArray = explode(',', $ip);
$firstIp = trim($ipArray[0]);

$validation_errors = array();
if (empty($first_name)) {
	$validation_errors["first_name"] = "First name is required.";
}
if (!empty($first_name) && preg_match('/\d/', $first_name)) {
	$validation_errors["first_name"] = "First name cannot contain numbers.";
}
if (empty($last_name)) {
	$validation_errors["last_name"] = "Last name is required.";
}
if (!empty($last_name) && preg_match('/\d/', $last_name)) {
	$validation_errors["last_name"] = "Last name cannot contain numbers.";
}
// if (!emailCheck($email)) {
//     $validation_errors["email"] = "Please enter a valid email address";
// }
if (empty($email)) {
	$validation_errors["email"] = "Email address is required.";
}
if (empty($phone)) {
	$validation_errors["phone"] = "Phone number is required.";
}
if (isset($_COOKIE['form_submitted'])) {
	$validation_errors["form_submitted"] = "Form already submitted recently. Please try again later.";
}
if (!empty($validation_errors)) {
	echo json_encode(array(
		"success" => false,
		"code" => INVALID_PARAMS_ERROR_CODE,
		"errors" => $validation_errors,
	));
	die();
}

$password = generate_password();

$apiData = [
	'first_name' => $first_name ?? 'empty',
	'last_name' => $last_name  ?? 'empty',
	'email' => $email ?? 'empty',
	'password' => $password,
	'phone' => $phone ?? 'empty',
	'phone_code' => $country_phone_code ?? 'empty',
	'geo' => $geo ?? 'empty',
	'ip' => $firstIp,
	'affiliate_id' => $aff_id,
	'offer_id' => '2',
	'aff_sub' => $_POST['subid'] ?? 'empty',
	'aff_sub2' => '',
	'aff_sub3' => $offer_name ?? 'No name',
	'aff_sub4' => $_POST['id'] ?? 'empty',
	'aff_sub5' => isset($_GET['test']) ? $_GET['test'] : '',
	'aff_sub11' => 'seo',
	'aff_sub14' => $_POST['language'] ?? 'empty'
];


$headers = [
	'Authorization: ' . $authToken,
	'Content-type: application/json'
];

$postdata = json_encode($apiData);

$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_URL, $URL);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$log_entry["request"] = $apiData;
$log_entry["response"] = json_decode($response, true);
$log_entry["http_code"] = $http_code;

logRequest($log_entry);

$payload = array(
	"success" => false,
	"http_code" => $http_code,
);

$decodedResponse = json_decode($response, true); // decode as array

switch ($http_code) {
	case 401:
		http_response_code(401);
		$payload["success"] = false;
		$payload["code"] = INVALID_AUTH_ERROR_CODE;
		break;
	case 400:
		http_response_code(400);
		$payload["success"] = false;
		$payload["code"] = INVALID_PARAMS_ERROR_CODE;
		if (isset($decodedResponse['validation_errors'])) {
			$payload["errors"] = $decodedResponse['validation_errors'];
		} elseif (isset($decodedResponse['message'])) {
			$payload["errors"] = $decodedResponse['message'];
		}
		break;
	case 200:
	case 201:
		http_response_code(200);
		$payload["success"] = true;
		$decodedResponse = json_decode($response, true);
		if (!empty($decodedResponse['auto_login_url'])) {
			$payload["auto_login_url"] = $decodedResponse['auto_login_url'];
		}
		setcookie('form_submitted', '1', time() + 3600, '/', '', false, true);
		break;
	case 500:
		http_response_code(500);
		$payload["success"] = false;
		$payload["code"] = "server_error";
		break;
	default:
		http_response_code(500);
		$payload["success"] = false;
		$payload["code"] = "unknown_error";
		break;
}

header('Content-Type: application/json; charset=utf-8');
$encoded_payload = json_encode($payload);

echo $encoded_payload;
die();

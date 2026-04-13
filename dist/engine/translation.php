<?php

$supportedLanguages = getSupportedLanguages();
$currentLang = getCurrentLang();
$translations = getTranslations();

//===============================================================

function langSupport($lang) {
	global $supportedLanguages;

	return in_array($lang, $supportedLanguages);
}

//---------------------------------------------------------------

function getSupportedLanguages() {
	$langFiles = glob(__DIR__ . '/../lang/*.json');

	$supportedLanguages = array_map(function ($file) {
		return pathinfo($file, PATHINFO_FILENAME);
	}, $langFiles);

	return $supportedLanguages;
}

//---------------------------------------------------------------

function getCurrentLang() {
	global $defaultLang;

	$uri = $_SERVER['REQUEST_URI'];
	$segments = explode('/', trim($uri, '/'));
	$firstSegment = $segments[0] ?? '';

	$currentLang = langSupport($firstSegment) ? $firstSegment : $defaultLang;

	return $currentLang;
}

//---------------------------------------------------------------

function getTranslations() {
	global $currentLang;

	$translations = [];

	$langFile = __DIR__ . "/../lang/{$currentLang}.json";

	if (file_exists($langFile)) {
		$translations = json_decode(file_get_contents($langFile), true);

		if (json_last_error() !== JSON_ERROR_NONE) {
			error_log("Failed to parse {$langFile}: " . json_last_error_msg());
			$translations = [];
		}
	}

	return $translations;
}

//---------------------------------------------------------------

function sanitize($string)
{
	if (!str_contains($string, '<')) return $string;

	$string = preg_replace('#<\s*script\b[^>]*>.*?<\s*/\s*script\s*>#is', '', $string);
	$string = preg_replace('/\s+on\w+\s*=\s*(".*?"|\'.*?\'|[^\s>]+)/i', '', $string);
	$string = preg_replace('/\b(href|src)\s*=\s*([\'"])\s*(javascript|data):.*?\2/i', '$1="#"', $string);
	$string = preg_replace('/style\s*=\s*("|\').*?(expression|javascript|data)\s*:.*?\1/i', '', $string);

	return $string;
}

//---------------------------------------------------------------

function t($key, $vars = [])
{
	global $translations, $offer_name, $variant;

	$commonKeys = [
		'{site_name}' => $offer_name,
		'{country}' => getValueByPath($translations, 'v.country'),
		'{country_name}' => getValueByPath($translations, 'v.countryName'),
		'{country_adjective}' => getValueByPath($translations, 'v.countryAdjective'),
	];

	$translation = getValueByPath($translations, $key);

	if (!$translation) return $key;

	if (str_contains($translation, '||')) {
		$parts = explode('||', $translation, 2);

		$translation = ($variant === 'no-country') ? ($parts[1] ?? $parts[0]) : $parts[0];
	}

	$translation = strtr($translation, array_merge($vars, $commonKeys));

	return sanitize($translation);
}

//---------------------------------------------------------------

function getValueByPath($arr, $path, $separator = '.')
{
	$keys = explode($separator, $path);

	foreach ($keys as $key) {
		if (!array_key_exists($key, $arr)) {
			return null;
		}
		$arr = $arr[$key];
	}

	return $arr;
}

//---------------------------------------------------------------

function flagUrl($lang) {
	global $country;

	switch ($lang) {
		case 'en': $lang = 'gb'; break;
		case 'cs': $lang = 'cz'; break;
		case 'ja': $lang = 'jp'; break;
		case 'da': $lang = 'dk'; break;
		case 'ko': $lang = 'kr'; break;

		case 'pt':
			$allowed = ['PT', 'BR'];
			$lang = in_array($country, $allowed) ? strtolower($country) : 'pt';
			break;
			
		case 'es':
			$allowed = ['ES', 'AR', 'MX', 'CO', 'CL', 'PE', 'EC', 'BO', 'PY', 'UY', 'PA', 'GT', 'CR', 'HN', 'NI', 'DO'];
			$lang = in_array($country, $allowed) ? strtolower($country) : 'es';
			break;

		case 'fr':
			$allowed = ['FR', 'BE', 'CH', 'CA'];
			$lang = in_array($country, $allowed) ? strtolower($country) : 'fr';
			break;

		case 'nl':
			$allowed = ['NL', 'BE'];
			$lang = in_array($country, $allowed) ? strtolower($country) : 'nl';
			break;

		case 'de':
			$allowed = ['DE', 'CH'];
			$lang = in_array($country, $allowed) ? strtolower($country) : 'de';
			break;

		case 'zh':
			$allowed = ['HK', 'TW'];
			$lang = in_array($country, $allowed) ? strtolower($country) : 'cn';
			break;

		case 'el':
			$allowed = ['GR', 'CY'];
			$lang = in_array($country, $allowed) ? strtolower($country) : 'gr';
			break;

		case 'ar':
			$allowed = ['SA', 'AE', 'EG', 'JO', 'KW', 'QA', 'BH', 'OM', 'IQ', 'SY', 'LB', 'YE', 'LY', 'TN', 'DZ', 'MA', 'SD'];
			$lang = in_array($country, $allowed) ? strtolower($country) : 'sa';
			break;

		default:
			break;
	}

	return "https://flagcdn.com/$lang.svg";
}

//---------------------------------------------------------------
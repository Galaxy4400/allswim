<?php
//===============================================================
/**
 * Responsive <picture> с фиксированным набором размеров.
 *
 * Первый параметр — только имя файла: "banner.png"
 * Путь фиксирован: /assets/img/responsive/
 *
 * Автоматически пытается найти варианты:
 *  - banner-320.avif
 *  - banner-640.avif
 *  - banner-1280.avif
 *
 * @param string $class    CSS-классы <picture>
 * @param string      $fileName Имя файла, например: "banner.png"
 * @param string|null      $theme лейбл темы
 * @param string|null $sizes    sizes="..." (по умолчанию 100vw)
 * @param array       $attrs    Дополнительные атрибуты <img>
 * @param bool $lazy    режим лейзилоада. По умолчанию включён
 *
 * @return string HTML <picture>
 */
function pictureSet(
	string $class, 
	string $fileName, 
	string|null $theme = null, 
	?string $sizes = null,
	?array $attrs = [],
	?bool $lazy = true): string
{
	$basePath = '/assets/img/responsive/' . ($theme ? $theme . '/' : "");
	$src = $basePath . $fileName;
	$ext  = strtolower(pathinfo($src, PATHINFO_EXTENSION));
	$baseFileName = substr($src, 0, -(strlen($ext) + 1));
	$sizes = parseSizeBrakepoints($sizes);
	$imgSizes = getImgSizes($baseFileName, $ext);
	$fallbackSize = $imgSizes[0];
	$alt = substr($fileName, 0, -(strlen($ext) + 1));

	$avifSrcSet = getSrcSet($baseFileName, "avif", $imgSizes);
	$webpSrcSet = getSrcSet($baseFileName, "webp", $imgSizes);
	$imgSrcSet = getSrcSet($baseFileName, $ext, $imgSizes);

	$fallbackSrc = $baseFileName . "-{$fallbackSize}." . $ext;
	$fallbackSrcsetAvif = $baseFileName . "-{$fallbackSize}.avif";
	$fallbackSrcsetWebp = $baseFileName . "-{$fallbackSize}.webp";

	$imgAttrs = getAttributes($attrs);

	$aspectSizes = getimagesize(__DIR__ . '/..' . $fallbackSrc)[3];

	if ($lazy) {
			return <<<HTML
<picture class="{$class}">
	<source type="image/avif" srcset="{$fallbackSrcsetAvif}" data-srcset="{$avifSrcSet}" data-sizes="{$sizes}">
	<source type="image/webp" srcset="{$fallbackSrcsetWebp}" data-srcset="{$webpSrcSet}" data-sizes="{$sizes}">
	<img src="{$fallbackSrc}" data-srcset="{$imgSrcSet}" data-sizes="{$sizes}" alt="{$alt}" {$aspectSizes} {$imgAttrs} data-lazy loading="lazy">
</picture>
HTML;
	} else {
	return <<<HTML
<picture class="{$class}">
	<source type="image/avif" srcset="{$avifSrcSet}" sizes="{$sizes}">
	<source type="image/webp" srcset="{$webpSrcSet}" sizes="{$sizes}">
	<img src="{$fallbackSrc}" srcset="{$imgSrcSet}" sizes="{$sizes}" alt="{$alt}" {$aspectSizes} {$imgAttrs} fetchpriority="high">
</picture>
HTML;
	}
}

// size brakepoints parser
// you can use format like this: 1200:800px,768:458px,100vw
// also tailwind media xs,sm,md,lg,xl,2xl: lg:800px,md:458px,100vw
function parseSizeBrakepoints($sizes = null) {
	if (!$sizes) {
			return "100vw";
	}

	// tailwind aliases
	$aliasMap = [
		'xs'  => 480,
		'sm'  => 640,
		'md'  => 768,
		'lg'  => 1024,
		'xl'  => 1280,
		'2xl' => 1536,
	];

	$parsed = [];
	$fallback = null;

	$parts = array_map('trim', explode(',', $sizes));

	foreach ($parts as $line) {
		if ($line === '') continue;

		if (preg_match('/^(\d+|xs|sm|md|lg|xl|2xl)\s*:\s*(.+)$/i', $line, $m)) {
			$key = strtolower($m[1]);
			$value = trim($m[2]);

			$breakpoint = ctype_digit($key)
				? (int)$key
				: ($aliasMap[$key] ?? null);

			if ($breakpoint === null) continue;

			$parsed[] = "(min-width: {$breakpoint}px) {$value}";
		} else {
			$fallback = $line;
		}
	}

	// собираем строку
	$result = implode(', ', $parsed);

	if ($fallback) {
		$result .= ($result ? ', ' : '') . $fallback;
	}

	return $result ?: "100vw";
}

function getImgSizes($baseFileName, $ext) {
	$globFiles = glob(__DIR__ . '/..' . $baseFileName . '-*.' . $ext);

	$filename = substr($baseFileName, strrpos($baseFileName, '/') + 1);

	$files = [];

	foreach ($globFiles as $file) {
		$fileNamePart = substr($file, strrpos($file, '/') + 1);
		$fileNamePart = substr($fileNamePart, 0, strrpos($fileNamePart, '-'));

		if ($fileNamePart == $filename) $files[] = $file;
	}

	$imgSizes = array_map(
    fn($file) => (int)preg_replace('/.*-(\d+)\.' . $ext . '$/', '$1', basename($file)),
    $files
	);

	sort($imgSizes, SORT_NUMERIC);

	return $imgSizes;
}

function getSrcSet($baseFileName, $ext, $sizesList = [320, 640, 1280]) {
	$srcsetParts = [];

	foreach ($sizesList as $size) {
		$file = $baseFileName . "-{$size}." . $ext;
		$srcsetParts[] = "{$file} {$size}w";
	}

	return implode(', ', $srcsetParts);
}

function getAttributes($attrs) {
	if (is_string($attrs)) {
		return $attrs;
	}

	$attrsStr = "";

	foreach ($attrs as $key => $value) {
		$attrsStr .= " $key=\"$value\"";
	}

	return $attrsStr;
}

//===============================================================
function getEmail() {
	global $translations;

	return getValueByPath($translations, 'v.email') . $_SERVER['HTTP_HOST'];
}
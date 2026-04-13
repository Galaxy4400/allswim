<?php

$meta = [
	'label' => t('t.main.menu_home'),
	'title' => t('t.titles.home'),
	'description' => t('t.descriptions.home'),
];

$metaMap = [
	'terms' => [
		'label' => t('t.main.menu_terms'),
		'title' => t('t.titles.terms'),
		'description' => t('t.descriptions.terms'),
	],
	'privacy' => [
		'label' => t('t.main.menu_privacy'),
		'title' => t('t.titles.privacy'),
		'description' => t('t.descriptions.privacy'),
	],
	'404' => [
		'label' => t('t.main.menu_404'),
		'title' => t('t.titles.404'),
		'description' => t('t.descriptions.404'),
	],
];

function definePageMeta($page = null) {
	global $meta, $metaMap;

	$pageMeta = $metaMap[$page] ?? [];

	$meta = array_merge($meta, $pageMeta);
}
<?php

include_once('init.php');

$fname = $_GET['f'] ?? 'article';
$cname = $_GET['c'] ?? 'index';
$path = checkPath($fname, $cname);
$pageTitle = 'Error 404';
$pageContent = '';

if ($path) {
	include_once($path);
} else {
	$pageContent = error('errors/v_404');
}

$html = template('base/v_main', [
	'title' => $pageTitle,
	'content' => $pageContent
]);

echo $html;

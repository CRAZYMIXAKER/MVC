<?php

include_once('init.php');

define('URL_PARAMS', parseUrl($_GET['querysystemurl'] ?? ''));

$fname = URL_PARAMS[0] ?? 'article';
$cname = URL_PARAMS[1] ?? 'index';
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


var_dump(URL_PARAMS);

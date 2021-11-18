<?php

session_start();
include_once('init.php');

$user = authGetUser();

$uri = $_SERVER['REQUEST_URI'];
$badUrl = BASE_URL . 'index.php';
if (strpos($uri, $badUrl) === 0) {
	$cname = 'errors/e404';
} else {
	$routes = include('routes.php');
	$url = $_GET['querysystemurl'] ?? '';
	// $url = $user === null ? 'auth/reg' : ($_GET['querysystemurl'] ?? '');

	$routerRes = parseUrl($url, $routes);
	$cname = $routerRes['controller'];
	define('URL_PARAMS', $routerRes['params']);
}
$path = "controllers/$cname.php";
$pageTitle = $pageContent = '';

if (!file_exists($path)) {
	$cname = 'errors/e404';
	$path = "controllers/$cname.php";
}

include_once($path);

$html = template('base/v_main', [
	'title' => $pageTitle,
	'content' => $pageContent,
	'user' => $user
]);

echo $html;
// echo 'USER: </br>';
// var_dump($user);
// echo '</br>';
// echo '$_SESSION:</br>';
// var_dump($_SESSION);
// echo '</br>';
// echo '3</br>';
// var_dump($user);

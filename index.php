<?php
$cname = $_GET['c'] ?? 'index';
$path = "controllers/article/$cname.php";

if (preg_match('/^[a-z]{1,15}$/', $cname)) {
	if (file_exists($path)) {
		include_once($path);
	} else {
		include_once('views/errors/v_404.php');
		exit();
	}
} else {
	include_once('views/errors/v_404.php');
	exit();
}

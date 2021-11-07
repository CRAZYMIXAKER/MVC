<?php

include_once('core/check.php');
include_once('core/error.php');

$fname = $_GET['f'];
$cname = $_GET['c'] ?? 'index';
$path = checkPath($fname, $cname);

if ($path) {
	include_once($path);
} else {
	error('views/errors/v_404.php');
}


// if (preg_match('/^[a-z]{1,15}$/', $cname)) {
// 	if (file_exists($path)) {
// 		include_once($path);
// 	} else {
// 		include_once('views/errors/v_404.php');
// 		exit();
// 	}
// } else {
// 	include_once('views/errors/v_404.php');
// 	exit();
// }

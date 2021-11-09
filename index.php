<?php

include_once('init.php');

$fname = $_GET['f'];
$cname = $_GET['c'];
$path = checkPath($fname, $cname);

if ($path) {
	include_once($path);
} else {
	error('views/errors/v_404.php');
}

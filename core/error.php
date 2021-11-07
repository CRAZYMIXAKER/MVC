<?php

function error($path)
{
	$protHttp = $_SERVER['SERVER_PROTOCOL'];
	header("$protHttp 404 Not Found");
	include("$path");
}

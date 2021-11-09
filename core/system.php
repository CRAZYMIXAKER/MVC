<?php

function template(string $path, array $vars = []): string
{
	$systemTemplateRenererIntoFullPath = "views/$path.php";
	extract($vars);
	ob_start();
	include($systemTemplateRenererIntoFullPath);
	return ob_get_clean();
}

function error($path)
{
	$protHttp = $_SERVER['SERVER_PROTOCOL'];
	header("$protHttp 404 Not Found");
	include("$path");
}

function checkId(string $id)
{
	$clearId = $id;
	$resultId = preg_match('/^[1-9]\d*$/', $clearId);
	if ($resultId === 1) {
		return $clearId;
	} else {
		error('views/errors/v_404.php');
		exit();
	}
}

function checkPath(string $foldersName, string $controllersName)
{
	if (checkFoldersName($foldersName) && checkFilesName($controllersName)) {
		$path = "controllers/$foldersName/$controllersName.php";
		if (file_exists($path)) {
			return $path;
		} else {
			error('views/errors/v_404.php');
			exit();
		}
	}
}

function checkFoldersName(string $name)
{
	return preg_match('/^[a-z]{1,35}$/', $name);
}

function checkFilesName(string $name)
{
	return preg_match('/^[a-z]{1,35}$/', $name);
}

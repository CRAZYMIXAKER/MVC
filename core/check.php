<?php
include_once('core/error.php');

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

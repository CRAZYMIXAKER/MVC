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

function checkFile()
{
}

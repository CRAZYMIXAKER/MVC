<?php

$users = usersAll();
$access = accessGet();
$userDeleted = false;
$userEdited = false;

if (isset($_SESSION['userDeleted'])) {
	$userDeleted = true;
	unset($_SESSION['userDeleted']);
}

if (isset($_SESSION['userEdited'])) {
	$userEdited = true;
	unset($_SESSION['userEdited']);
}

$pageTitle = 'Users';
$pageContent = template('users/v_all', [
	'userDeleted' => $userDeleted,
	'userEdited' => $userEdited,
	'access' => $access,
	'users' => $users
]);

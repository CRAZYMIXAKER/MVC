<?php

$users = usersAll();
$userDeleted = false;

if (isset($_SESSION['userDeleted'])) {
	$userDeleted = true;
	unset($_SESSION['userDeleted']);
}

$pageTitle = 'Users';
$pageContent = template('users/v_all', ['users' => $users, 'userDeleted' => $userDeleted]);

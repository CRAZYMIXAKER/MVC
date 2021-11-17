<?php

$id = checkId(URL_PARAMS['id']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fields = extractFields($_POST, ['login', 'email', 'name', 'id_access']);
	$fields['id_user'] = $id;
	$userValidate = true; //userValidate($fields)

	if ($userValidate) {

		userEdit($fields);
		$_SESSION['userEdited'] = true;
		header('Location:' . BASE_URL . 'users/all');
		exit();
	}
} else {
	$pageTitle = 'Error 404';
	$pageContent = error('errors/v_404');
	exit();
}

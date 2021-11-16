<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fields = extractFields($_POST, ['login', 'email', 'name', 'password', 'passwordConfirm']);
	$registrationValidate = registrationValidate($fields);

	if (empty($registrationValidate)) {
		$fields['password'] = password_hash($fields['password'], PASSWORD_BCRYPT);
		unset($fields['passwordConfirm']);
		userAdd($fields);
		header('Location:' . BASE_URL);
		exit();
	}
} else {
	$fields = ['login' => '', 'email' => '', 'name' => ''];
	$registrationValidate = [];
}

$pageTitle = 'Registration';
$pageContent = template('auth/v_reg', [
	'registrationValidate' => $registrationValidate,
	'fields' => $fields
]);

<?php

function userById(string $id_user): ?array
{
	$sql = "SELECT id_user, login, email, name FROM users WHERE id_user=:id_user";
	$query = dbQuery($sql, ['id_user' => $id_user]);
	$user = $query->fetch();
	return $user === false ? null : $user;
}

function usersOne(string $login): ?array
{
	$sql = "SELECT id_user, password FROM users WHERE login=:login";
	$query = dbQuery($sql, ['login' => $login]);
	$user = $query->fetch();
	return $user === false ? null : $user;
}

function userAdd(array $fields): bool
{
	$sql = "INSERT users (login, password, email, name) VALUES (:login, :password, :email, :name)";
	dbQuery($sql, $fields);
	return true;
}

function registrationValidate(array &$fields): array
{
	$errors = [];

	foreach ($fields as $key => $item) {
		if (empty($item)) {
			$errors[$key] = "Заполните поле $key";
		}
	}

	if ($fields['password'] != $fields['passwordConfirm']) {
		$errors['passwordConfirm'] = 'Пароли должны совпадать';
	}

	foreach ($fields as $key => $item) {
		$fields[$key] = htmlspecialchars($fields[$key]);
	}
	// $fields['title'] = htmlspecialchars($fields['title']);
	// $fields['content'] = htmlspecialchars($fields['content']);

	return $errors;
}

<?php

function userById(string $id_user): ?array
{
	$sql = "SELECT id_user, id_access, login, email, name FROM users WHERE id_user=:id_user";
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

	if (usersOne($fields['login']) !== null) {
		$errors['login'] = 'Этот логин уже занят, выберите пожалуйста другой';
	}

	if ($fields['password'] != $fields['passwordConfirm']) {
		$errors['passwordConfirm'] = 'Пароли должны совпадать';
	}

	foreach ($fields as $key => $item) {
		$fields[$key] = htmlspecialchars($fields[$key]);
	}

	return $errors;
}

function usersAll(): array
{
	$sql = "SELECT * FROM users ORDER BY id_user";
	$query = dbQuery($sql);
	return $query->fetchAll();
}

function userDelete(int $id): bool
{
	$sql = "DELETE FROM users WHERE id_user = :id";
	dbQuery($sql, ['id' => $id]);
	return true;
}

function userEdit(array $fields)
{
	$sql = "UPDATE users SET id_access = :id_access, login = :login, email = :email, name = :name WHERE id_user = :id_user";
	$query = dbQuery($sql, $fields);
	return $query->rowCount();
}

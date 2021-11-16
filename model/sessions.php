<?php

function sessionsAdd(int $idUser, string $token): bool
{
	$params = ['id_user' => $idUser, 'token' => $token];
	$sql = "INSERT sessions (id_user, token) VALUES (:id_user, :token)";
	dbQuery($sql, $params);
	return true;
}

function sessionsOne(string $token): ?array
{
	$sql = "SELECT * FROM sessions WHERE token=:token";
	$query = dbQuery($sql, ['token' => $token]);
	$session = $query->fetch();
	return $session === false ? null : $session;
}

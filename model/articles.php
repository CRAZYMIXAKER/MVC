<?php

include_once('core/db.php');

function arcticlesGet(): array
{
	$sql = "SELECT * FROM articles ORDER BY dt_add";
	$query = dbQuery($sql);
	return $query->fetchAll();
}

function articlesOne(int $id)
{
	$sql = "SELECT * FROM articles WHERE id_article = :id";
	$query = dbQuery($sql, ['id' => $id]);
	return $query->fetch();
}

function articlesOneDelete(int $id): int
{
	$sql = "DELETE FROM articles WHERE id_article = :id";
	$query = dbQuery($sql, ['id' => $id]);
	return $query->rowCount();
}

function articlesOneAdd(array $fields)
{
	$sql = "INSERT articles (title, content) VALUES (:title, :content)";
	$query = dbQuery($sql, $fields);
	return $query;
}

function articleEdit(array $fields)
{
	$sql = "UPDATE articles SET title = :title, content = :content WHERE id_article = :id_article";
	$query = dbQuery($sql, $fields);
	return $query->rowCount();
}

function articleValidate(array &$fields): array
{
	$errors = [];
	$titleLen = mb_strlen($fields['title'], 'UTF-8');
	$contentLen = mb_strlen($fields['content'], 'UTF-8');

	if ($titleLen < 2 || $titleLen > 35) {
		$errors['title'] = 'Заголовок, должен быть от 2 до 35 символов';
	}

	if ($contentLen < 3 || $contentLen > 150) {
		$errors['content'] = 'Контент, должен быть от 3 до 150 символов';
	}

	if (empty($titleLen) && empty($contentLen)) {
		$errors['general'] = 'Поля, не должны быть пустыми';
	}

	$fields['title'] = htmlspecialchars($fields['title']);
	$fields['content'] = htmlspecialchars($fields['content']);

	return $errors;
}

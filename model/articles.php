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
	// $sql = "SELECT * FROM articles WHERE id_article = :id";
	$sql = "SELECT * FROM articles JOIN categories ON articles.id_category = categories.id_category WHERE articles.id_article = :id";
	$query = dbQuery($sql, ['id' => $id]);
	return $query->fetch();
}

function articleDelete(int $id): bool
{
	$sql = "DELETE FROM articles WHERE id_article = :id";
	dbQuery($sql, ['id' => $id]);
	return true;
}

function articleAdd(array $fields)
{
	$sql = "INSERT articles (id_category, id_user, title, content) VALUES (:id_category, :id_user, :title, :content)";
	$query = dbQuery($sql, $fields);
	return $query;
}

function articleEdit(array $fields)
{
	$sql = "UPDATE articles SET id_category = :id_category, title = :title, content = :content WHERE id_article = :id_article";
	$query = dbQuery($sql, $fields);
	return $query->rowCount();
}

function articleValidate(array &$fields): array
{
	$errors = [];
	$titleLen = mb_strlen($fields['title'], 'UTF-8');
	$contentLen = mb_strlen($fields['content'], 'UTF-8');

	if ($fields['id_category'] === '') {
		$errors['category'] = 'Выберите категорию';
	}

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

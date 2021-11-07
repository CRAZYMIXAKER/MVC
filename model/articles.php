<?php

include_once('core/db.php');

function arcticlesGet(): array
{
	$sql = "SELECT * FROM articles ORDER BY dt_add";
	$query = dbQuery($sql);
	return $query->fetchAll();
}

function articlesOne(int $id): array
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

function articlesOneEdit(array $fields)
{
	$sql = "UPDATE articles SET title = :title, content = :content WHERE id_article = :id_article";
	$query = dbQuery($sql, $fields);
	return $query->rowCount();
}

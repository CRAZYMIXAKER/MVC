<?php

include_once('core/db.php');

function arcticleAll(): array
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

function deleteArticlesOne($id)
{
	$sql = "DELETE FROM articles WHERE id_article = :id";
	$query = dbQuery($sql, ['id' => $id]);
	return $query->rowCount();
}

function articlesOneAdd($fields)
{
	$sql = "INSERT articles (title, content) VALUES (:title, :content)";
	$query = dbQuery($sql, $fields);
	return $query;
}

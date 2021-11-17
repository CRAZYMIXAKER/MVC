<?php

function categoriesGet(): array
{
	$sql = "SELECT * FROM Categories ORDER BY id_category";
	$query = dbQuery($sql);
	return $query->fetchAll();
}

function articlesCategoryGet(int $id): array
{
	$sql = "SELECT id_article, title, content, dt_add, name_category FROM articles join categories on articles.id_category = categories.id_category WHERE categories.id_category = :id";
	$query = dbQuery($sql, ['id' => $id]);
	return $query->fetchAll();
}

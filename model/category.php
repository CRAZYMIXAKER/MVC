<?php

function categoriesGet(): array
{
	$sql = "SELECT * FROM Categories ORDER BY id_category";
	$query = dbQuery($sql);
	return $query->fetchAll();
}

function articlesCategoryGet(int $id)
{
	$sql = "SELECT * FROM articles WHERE id_category = :id";
	$query = dbQuery($sql, ['id' => $id]);
	return $query->fetchAll();
}


function category(int $id)
{

	$sql = "SELECT name_category FROM categories where id_category = :id";
	$query = dbQuery($sql, ['id' => $id]);
	return $query->fetchColumn();
}

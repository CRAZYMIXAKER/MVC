<?php

$categories = categoriesGet();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fields = extractFields($_POST, ['id_category', 'title', 'content']);
	$articleValidate = articleValidate($fields);

	if (empty($articleValidate)) {
		articleAdd($fields);
		header('Location:' . BASE_URL . 'article/index');
		exit();
	}
} else {
	$fields = ['title' => '', 'content' => ''];
	$articleValidate = [];
}

$pageTitle = 'ArticleAdd';
$pageContent = template('article/v_add', [
	'categories' => $categories,
	'fields' => $fields,
	'articleValidate' => $articleValidate
]);

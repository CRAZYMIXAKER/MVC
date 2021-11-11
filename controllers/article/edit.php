<?php

$id = checkId(URL_PARAMS[2] ?? '');
$categories = categoriesGet();
$fields = articlesOne($id);
$hasArticales = $fields !== false;

if ($hasArticales) {
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$fields = extractFields($_POST, ['id_category', 'title', 'content']);
		$fields['id_article'] = "$id";
		$articleValidate = articleValidate($fields);

		if (empty($articleValidate)) {
			$test = articleEdit($fields);
			header('Location:' . BASE_URL . 'article/index');
			exit();
		}
	} else {
		$articleValidate = [];
	}
} else {
	$pageTitle = 'Error 404';
	$pageContent = error('errors/v_404');
	exit();
}

$pageTitle = 'Edit';
$pageContent = template('article/v_edit', [
	'categories' => $categories,
	'fields' => $fields,
	'articleValidate' => $articleValidate
]);

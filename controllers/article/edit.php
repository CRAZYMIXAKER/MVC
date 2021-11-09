<?php

$id = checkId($_GET['id'] ?? '');
$fields = articlesOne($id);
$hasArticales = $article !== false;

if ($hasArticales) {
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$fields = extractFields($_POST, ['title', 'content']);
		$fields['id_article'] = "$id";
		$articleValidate = articleValidate($fields);

		if (empty($articleValidate)) {
			$test = articleEdit($fields);
			header('Location:index.php?f=article&c=index');
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
$pageContent = template('article/v_edit', ['fields' => $fields, 'articleValidate' => $articleValidate]);

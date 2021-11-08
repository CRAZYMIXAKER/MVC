<?php

include_once('model/articles.php');
include_once('core/error.php');
include_once('core/check.php');
include_once('core/arr.php');

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
	error('views/errors/v_404.php');
	exit();
}

include('views/article/v_edit.php');

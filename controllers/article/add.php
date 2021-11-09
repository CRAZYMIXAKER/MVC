<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fields = extractFields($_POST, ['title', 'content']);
	$articleValidate = articleValidate($fields);

	if (empty($articleValidate)) {
		articleAdd($fields);
		header('Location:index.php?f=article&c=index');
		exit();
	}
} else {
	$articleValidate = [];
	$fields = ['title' => '', 'content' => ''];
}

$pageTitle = 'ArticleAdd';
$pageContent = template('article/v_add', ['fields' => $fields, 'articleValidate' => $articleValidate]);

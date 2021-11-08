<?php

include_once('model/articles.php');
include_once('core/arr.php');

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

include('views/article/v_add.php');

<?php

include_once('model/articles.php');
include_once('core/arr.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$article = extractFields($_POST, ['title', 'content']);
	$articleAdd = articlesOneAdd($article);
	header('Location:index.php?f=article&c=index');
	exit();
} else {
	$article = ['title' => '', 'content' => ''];
}

include('views/article/v_add.php');

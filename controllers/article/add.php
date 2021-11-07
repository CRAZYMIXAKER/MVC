<?php

include_once('model/articles.php');
include_once('core/arr.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$article = extractFields($_POST, ['title', 'content']);
	// print_r($article);
	$articleAdd = articlesOneAdd($article);
} else {
	$article = ['title' => '', 'content' => ''];
}

include('views/article/v_add.php');

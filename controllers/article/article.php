<?php

include_once('model/articles.php');

$strId = $_GET['id'] ?? '';
$id = (int)$strId;

$article = articlesOne($id);
$hasArticle = $article !== false;

if ($hasArticle) {
	include('views/article/v_article.php');
} else {
	header('HTTP/1.1 404 Not Found');
	include('views/errors/v_404.php');
}

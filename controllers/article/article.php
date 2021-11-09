<?php

$id = checkId($_GET['id'] ?? '');
$article = articlesOne($id);
$hasArticle = $article !== false;

if ($hasArticle) {
	include('views/article/v_article.php');
} else {
	error('views/errors/v_404.php');
}

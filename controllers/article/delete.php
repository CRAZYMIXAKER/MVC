<?php

include_once('model/articles.php');

$strId = $_GET['id'] ?? '';
$id = (int)$strId;
// include('views/article/v_delete.php');
$deleteArticle = deleteArticlesOne($id);

if ($deleteArticle == 1) {
	header('Location:index.php?c=index');
} else {
	header('HTTP/1.1 404 Not Found');
	include('views/errors/v_404.php');
}

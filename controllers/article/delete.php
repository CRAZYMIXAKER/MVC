<?php

include_once('model/articles.php');
include_once('core/check.php');
include_once('core/error.php');

$id = checkId($_GET['id'] ?? '');
// include('views/article/v_delete.php');
$deleteArticle = deleteArticlesOne($id);

if ($deleteArticle === 1) {
	header('Location:index.php?c=index');
} else {
	error('views/errors/v_404.php');
}

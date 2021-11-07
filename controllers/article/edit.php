<?php

include_once('model/articles.php');
include_once('core/arr.php');

$strId = $_GET['id'] ?? '';
$id = (int) $strId;

if ($id) {
	$article = articlesOne($id);
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$articleEdit = extractFields($_POST, ['title', 'content']);
		$articleEdit['id_article'] = "$id";
		articlesOneEdit($articleEdit);
		header('Location:index.php?c=index');
	}
} else {
	header('HTTP/1.1 404 Not Found');
	include('views/errors/v_404.php');
}

include('views/article/v_edit.php');

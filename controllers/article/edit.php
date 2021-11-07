<?php

include_once('model/articles.php');
include_once('core/arr.php');

$strId = $_GET['id'] ?? '';
$id = (int) $strId;

if ($id > 0) {
	$article = articlesOne($id);
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$articleEdit = extractFields($_POST, ['title', 'content']);
		$articleEdit['id_article']= "$id";
		articlesOneEdit($articleEdit);
	header('Location:index.php?c=index');
	}
} else {
	echo 'problem';
}


include('views/article/v_edit.php');

<?php

include_once('model/articles.php');
include_once('core/check.php');
include_once('core/error.php');

$id = checkId($_GET['id'] ?? '');
// include('views/article/v_delete.php');

if (articleDelete($id)) {
	header('Location:index.php?f=article&c=index');
} else {
	error('views/errors/v_404.php');
}

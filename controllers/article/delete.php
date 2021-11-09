<?php

$id = checkId($_GET['id'] ?? '');

if (articleDelete($id)) {
	header('Location:index.php?f=article&c=index');
} else {
	$pageTitle = 'Error 404';
	$pageContent = error('errors/v_404');
}

<?php

$id = checkId(URL_PARAMS[2] ?? '');

if (articleDelete($id)) {
	header('Location:' . BASE_URL . 'article/index');
} else {
	$pageTitle = 'Error 404';
	$pageContent = error('errors/v_404');
}

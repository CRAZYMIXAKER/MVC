<?php

$id = checkId(URL_PARAMS['id']);

if (articleDelete($id)) {
	$_SESSION['articleDeleted'] = true;
	header('Location:' . BASE_URL);
} else {
	$pageTitle = 'Error 404';
	$pageContent = error('errors/v_404');
}

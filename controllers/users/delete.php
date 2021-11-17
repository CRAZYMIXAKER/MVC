<?php

$id = checkId(URL_PARAMS['id']);

if (userDelete($id)) {
	$_SESSION['userDeleted'] = true;
	header('Location:' . BASE_URL . 'users/all');
} else {
	$pageTitle = 'Error 404';
	$pageContent = error('errors/v_404');
}

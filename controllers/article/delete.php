<?php

$id = checkId($_GET['id'] ?? '');

if (articleDelete($id)) {
	header('Location:index.php?f=article&c=index');
} else {
	error('views/errors/v_404.php');
}

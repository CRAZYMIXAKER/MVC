<?php

$articles = arcticlesGet();
$articleAdded = false;
$articleDeleted = false;

if (isset($_SESSION['articleAdded'])) {
	$articleAdded = true;
	unset($_SESSION['articleAdded']);
}
if (isset($_SESSION['articleDeleted'])) {
	$articleDeleted = true;
	unset($_SESSION['articleDeleted']);
}

$pageTitle = 'Articles';
$pageContent = template('article/v_all', [
	'articles' => $articles,
	'articleAdded' => $articleAdded,
	'articleDeleted' => $articleDeleted
]);

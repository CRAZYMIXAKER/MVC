<?php

$articles = arcticlesGet();
$articleAdded = false;

if (isset($_SESSION['articleAdded'])) {
	$articleAdded = true;
	unset($_SESSION['articleAdded']);
}

$pageTitle = 'Articles';
$pageContent = template('article/v_all', [
	'user' => $user,
	'articles' => $articles,
	'articleAdded' => $articleAdded
]);

<?php

$id = checkId(URL_PARAMS['id']);
$article = articlesOne((int)$id);
$hasArticle = $article !== false;

$pageTitle = 'Article';

if ($hasArticle) {
	$pageContent = template('article/v_article', ['user' => $user, 'article' => $article]);
} else {
	$pageTitle = 'Error 404';
	$pageContent = error('errors/v_404');
}

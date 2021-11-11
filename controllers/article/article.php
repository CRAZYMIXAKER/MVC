<?php

$id = checkId(URL_PARAMS[2] ?? '');
$article = articlesOne($id);
$hasArticle = $article !== false;

$pageTitle = 'Article';

if ($hasArticle) {
	$pageContent = template('article/v_article', ['article' => $article]);
} else {
	$pageTitle = 'Error 404';
	$pageContent = error('errors/v_404');
}

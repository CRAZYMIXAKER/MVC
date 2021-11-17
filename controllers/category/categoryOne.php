<?php

$id = checkId(URL_PARAMS['id']);
$articles = articlesCategoryGet((int)$id);

if (!empty($articles)) {
	$pageTitle = 'ArticleCategory';
	$pageContent = template('category/v_categoryOne', [
		'articles' => $articles
	]);
} else {
	$pageTitle = 'Error 404';
	$pageContent = error('errors/v_404');
}

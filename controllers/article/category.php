<?php

$id = checkId($_GET['id'] ?? '');
$articles = articlesCategoryGet($id);

$pageTitle = 'ArticleCategory';
$pageContent = template('article/v_articleCategory', ['articles' => $articles]);

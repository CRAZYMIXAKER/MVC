<?php

$id = checkId($_GET['id'] ?? '');
$name_category = category($id);
$articles = articlesCategoryGet($id);

$pageTitle = 'ArticleCategory';
$pageContent = template('article/v_articleCategory', ['name_category' => $name_category, 'articles' => $articles]);

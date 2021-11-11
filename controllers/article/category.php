<?php

$id = checkId(URL_PARAMS[2] ?? '');
$name_category = category($id);
$articles = articlesCategoryGet($id);

$pageTitle = 'ArticleCategory';
$pageContent = template('article/v_articleCategory', ['name_category' => $name_category, 'articles' => $articles]);

<?php

$id = checkId(URL_PARAMS['id']);
$name_category = category((int)$id);
$articles = articlesCategoryGet($id);

$pageTitle = 'ArticleCategory';
$pageContent = template('article/v_articleCategory', ['name_category' => $name_category, 'articles' => $articles]);

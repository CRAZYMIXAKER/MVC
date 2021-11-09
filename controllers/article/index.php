<?php

$articles = arcticlesGet();
$pageTitle = 'Articles';
$pageContent = template('article/v_index', ['articles' => $articles]);

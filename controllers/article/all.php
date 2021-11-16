<?php

$articles = arcticlesGet();
$pageTitle = 'Articles';
$pageContent = template('article/v_all', ['articles' => $articles]);

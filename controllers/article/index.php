<?php

include_once('model/articles.php');

$articles = arcticlesGet();

include('views/article/v_index.php');

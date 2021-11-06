<?php

include_once('model/articles.php');

$articles = arcticleAll();

include('views/article/v_index.php');

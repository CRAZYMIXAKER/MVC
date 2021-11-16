<?php

const BASE_URL = '/';

const DB_HOST = 'localhost';
const DB_NAME = 'Mvc';
const DB_LOGIN = 'root';
const DB_PASS = 'root';


include_once('core/system.php');
include_once('core/auth.php');
include_once('core/arr.php');
include_once('core/db.php');

include_once('model/articles.php');
include_once('model/users.php');
include_once('model/sessions.php');

<?php

unset($_SESSION['token']);
setcookie('token', $token, time() - 1, BASE_URL);
header('Location: ' . BASE_URL);

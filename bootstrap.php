<?php
session_start();

define('URL', 'http://localhost/php-crud/'); // <--- konstanta
define('DIR', __DIR__ . '/');
require DIR . 'app/functions.php';
_d($_SESSION, 'SESIJA--->');
?>
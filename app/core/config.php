<?php

$root = $_SERVER['REQUEST_SCHEME']."://". $_SERVER['SERVER_NAME']. $_SERVER['PHP_SELF'];
$root = str_replace("index.php", "", $root);

define('ROOT', $root);
define('ASSETS', 'http://localhost/Php-mvc/public/assets');

define('DBNAME', 'php-mvc');
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBDRIVER', 'mysql');
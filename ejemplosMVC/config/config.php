<?php
define('AUTOLOAD_DIRECTORIES',[
    '../models',
    '../libraries',
    '../exceptions',
]);

define('DEFAULT_CONTROLLER', 'welcome');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'biblioteca');
define('DB_PORT', 3306);
define('DB_CHARSET', 'utf8');

define('DB_CLASS', 'DBMysqli');
define('SGDB', 'mysql');

define('DEBUG', true);
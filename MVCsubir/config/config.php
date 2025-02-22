<?php

    define('AUTOLOAD_DIRECTORIES',[
    '../models',
    '../libraries',
    '../exceptions',
]);

define('DEFAULT_CONTROLLER', 'welcome');

define('DB_HOST', 'fdb1030.awardspace.net');
define('DB_USER', '4575737_bibliotecamarc');
define('DB_PASS', 'Admin1234');
define('DB_NAME', '4575737_bibliotecamarc');
define('DB_PORT', 3306);
define('DB_CHARSET', 'utf8');

define('DB_CLASS', 'DBMysqli');
define('SGDB', 'mysql');

define('DEBUG', false);

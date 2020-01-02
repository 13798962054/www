<?php
// HTTP
define('HTTP_SERVER', 'http://192.168.0.11/mycncart/');

// HTTPS
define('HTTPS_SERVER', 'http://192.168.0.11/mycncart/');

// DIR
define('DIR_APPLICATION', '/var/www/html/mycncart/catalog/');
define('DIR_SYSTEM', '/var/www/html/mycncart/system/');
define('DIR_IMAGE', '/var/www/html/mycncart/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123');
define('DB_DATABASE', 'virsion');
define('DB_PORT', '3306');
define('DB_PREFIX', '');
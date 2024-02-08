<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'crud_app');

// Autoload function for including classes
spl_autoload_register(function ($class_name) {
    require_once 'models/' . $class_name . '.php';
});
?>

<?php
require 'config.php';
spl_autoload_register(function ($name) {
    require_once(str_replace('\\',DS, APPLICATION_PATH.DS.$name.'.php'));
});
$route = $_SERVER['REQUEST_URI'];
require_once 'routes.php';

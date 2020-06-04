<?php
    // turn on/off error reporting
    error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );

    // site url
    define('SITE_URL', 'http://127.0.0.1');

    // database related constants
    define('DB_DRIVER', 'mysql');           // Database driver ...
    /*define('DB_SERVER', 'localhost');     // ... host name */
    define('DB_SERVER_USERNAME', 'root');   // ... username
    define('DB_SERVER_PASSWORD', '');       // ... password
    define('DB_DATABASE', 'kwb');           // ... name
    
    define('DB_SERVER', '127.0.0.1');       // I changed from `localhost` to `127.0.0.1` because it made less response time on my web-page 


    define('DS',DIRECTORY_SEPARATOR);
    
    define('__ROOT__', dirname(dirname(__FILE__)));
    
    define('APPLICATION_PATH', dirname($_SERVER['DOCUMENT_ROOT']).DS.'src');
<?php

ini_set('display_errors','on');
error_reporting(E_ALL);

class BootStrap
{

    public static function start()
    {

        ini_set('display_errors','on');
        error_reporting(E_ALL);

        session_start();

        //fonction de timeout de session
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
            // last request was more than 30 minutes ago
            session_unset();     // unset $_SESSION variable for the run-time
            session_destroy();   // destroy session data in storage
        }
        $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp


        // PARAMS MYSQL
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'chat');
        define('DB_LOGIN', 'root');
        define('DB_PASSWORD', '');


        spl_autoload_register(array(__CLASS__, 'autoload'));



    }

    static function autoload($class){
        require 'model/' . $class . '.php';
    }


}
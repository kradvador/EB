<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
// on passe l'url en parametre pour choisir quoi faire selon celle que l'on a
// chaque cas du switch est une route


switch ($request_uri[0]) {
    // Home page
    case '/EB/':
        require 'views/home.php';
        break;
    // Home page
    case '/EB/accueil':
        require 'views/home.php';
        break;
    // Login page
    case '/EB/login':
        require 'views/login.php';
        break;
    case '/EB/valid':
        require 'controller/valid_form.php';
        break;
    case '/EB/liste':
        require 'views/liste.php';
        break;
    // test classe
    case '/EB/class':
        require 'views/class.php';
        break;
    // test form
    case '/EB/form':
        require 'controller/form.php';
        break;

//     Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require 'views/404.php';
        break;
}
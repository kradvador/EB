<?php

include_once('bootstrap.php');

BootStrap::start();

// lance la fonction statique qui permet d'avoir des constantes déclaré dans un autre fichier

require('controller/router.php');

// envoi vers le routeur, fichier qui va gérer l'affichage des pages




<?php
/**
 * Created by PhpStorm.
 * User: leboe
 * Date: 04/04/2019
 * Time: 10:30
 */

echo ('test class');


$tm = new taskManager();
$test1 = $tm->getlog();
//$test2 = $tm->setCat();

var_dump($test1);
//var_dump($test2);

echo 'le login est ' . ($test1[0]['login']) . ' et le mot de passe est ' . ($test1[0]['password']);
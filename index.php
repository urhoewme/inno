<?php

require_once __DIR__.'/vendor/autoload.php';


use app\system\Application;

$app = new Application();

require_once __DIR__.'/system/routing/routes.php';
//$app->router->get('/', 'home');

$app->run();
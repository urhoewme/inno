<?php

use app\system\Application;
use app\App\src\controllers\UserController;

$app = new Application();


//$router = $app->router;

$app->router->get('/', [UserController::class, 'index']);
$app->router->get('/users/new', 'new');
$app->router->post('/users/create', [UserController::class, 'handleUser']);

//$router->get('/', 'home');
//
//$router->get('/form', function () {
//    return 'Form';
//});
<?php

namespace app\App\src\classes;


use app\system\Application;

class Controller
{
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}
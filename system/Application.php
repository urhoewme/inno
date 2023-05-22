<?php

namespace app\system;

use app\App\src\classes\Request;
use app\App\src\classes\Response;
use app\App\src\classes\Router;

class Application
{
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public function __construct()
    {
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
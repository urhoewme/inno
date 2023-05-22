<?php

namespace app\App\src\controllers;
use app\App\src\classes\Controller;

class UserController extends Controller
{
    public function create()
    {
        return $this->render('create');
    }
    public function index()
    {
        $params = [
            'name' => "Yauheni"
        ];
        return $this->render('index', $params);
    }
    public static function handleUser()
    {
        return 'Handle submitted data';
    }
}
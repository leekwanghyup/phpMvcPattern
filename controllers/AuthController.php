<?php 
namespace app\controllers;

use app\core\Request;

class AuthController extends Controller
{
    function __construct()
    {
        $this->setLayout('auth');        
    }

    public function login(Request $request)
    {
        if($request->isGet())
        {
            return $this->render('login');
        }
        if($request->isPost())
        {
            return "login post";
        }
    }

    public function register(Request $request)
    {
        if($request->isGet())
        {
            return $this->render('register');
        }
        if($request->isPost())
        {
            return "register post";
        }
    }

}
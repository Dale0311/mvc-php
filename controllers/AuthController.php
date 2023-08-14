<?php 

namespace app\controllers;

use app\core\App;
use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{   
    function __construct()
    {
        $this->setLayout("auth");
    }
    function login(Request $request){
        if($request->isPost()){
            $body = $request->getBody();
        }
        return $this->render("login");
    }
    function register(Request $request){
        if($request->isPost()){
            $register = new RegisterModel;
        }
        return $this->render("register");
    }

}
<?php 

namespace app\controllers;

use app\core\App;
use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{   
    function login(Request $request){
        $this->setLayout("auth");
        if($request->isPost()){
            $body = $request->getBody();
        }
        return $this->render("login");
    }
    function register(Request $request){
        if($request->isPost()){
            return "handling submitted data";
        }
        return $this->render("register");
    }

}
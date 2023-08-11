<?php 
namespace app\controllers;
use app\core\App;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller{
    function home(){
        $params = ['name'=> "dale"];
        return $this->render("home", $params);
    }
    function contact(){
        return $this->render("contact");
    }
    function handleContact(Request $request){
        $body = $request->getBody();
        extract($body);
        return $this->render("contact");
    }
}
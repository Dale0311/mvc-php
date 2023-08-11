<?php 
namespace app\core;
use app\core\App;
class Controller{
    public string $layout = "main";
    function render($view, $params = []){
        return App::$app->router->renderView($view, $params);
    }
    function setLayout($layout){
        $this->layout = $layout;
    }
}
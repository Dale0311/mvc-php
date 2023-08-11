<?php 
namespace app\core;
class App{
    public Router $router;
    public Request $request;
    public Response $response;
    public static App $app;
    public Controller $controller;
    function __construct()
    {   
        $this->request = new Request;
        $this->response = new Response;
        $this->router = new Router($this->request, $this->response);
        self::$app = $this;
    }

    function getController(){
        return $this->controller;
    }

    function setController(Controller $controller){
        $this->controller = $controller;
    }
    function run(){
        echo $this->router->resolve();
    }
}
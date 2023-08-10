<?php 
namespace app\core;
class App{
    public Router $router;
    protected Request $request;
    
    function __construct()
    {   
        $this->request = new Request;
        $this->router = new Router($this->request);
    }

    function run(){
        echo $this->router->resolve();
    }
}
<?php 

namespace app\core;
class Router{
    protected $routes = [];
    protected Request $request;

    function __construct($request)
    {
        $this->request = $request;
    }

    function get($uri, $callback){
        $this->routes['get'][$uri] = $callback;
    }

    function resolve(){
        // get curr path and method
        $path = $this->request->getPath();    
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path]?? false;
        if(! $callback){
            return "Not Found! ";
            die();
        }
        if(is_string($callback)){
            return $this->renderView($callback);
        }

        return call_user_func($callback);
    }

    function renderView($callback){
        require basePath("/views/{$callback}.view.php");
    }
}
<?php 

namespace app\core;
class Router{
    protected $routes = [];
    protected Request $request;
    protected Response $response;
    function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    function get($uri, $callback){
        $this->routes['get'][$uri] = $callback;
    }
    function post($uri, $callback){
        $this->routes['post'][$uri] = $callback;
    }

    function resolve(){
        // get curr path and method
        $path = $this->request->getPath();    
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path]?? false;
        if(! $callback){
            $this->response->setResponse(404);
            return $this->renderView("404");
            die();
        }
        if(is_string($callback)){
            return $this->renderView($callback);
        }
        if(is_array($callback)){
            App::$app->controller = new $callback[0];
            $callback[0] = App::$app->controller;
        }
        return call_user_func($callback, $this->request);
    }

    function renderView($callback, $params = []){
        // take the layout content or template
        $layout = $this->layoutContent();
        
        // main content
        $mainContent = $this->mainContent($callback, $params);
        
        // place the main content to the placeholder
        return str_replace("{{content}}", $mainContent, $layout);
    }

    function layoutContent(){
        $layout = App::$app->controller->layout;
        // output buffer - store the output 
        ob_start();
        require basePath("/views/layouts/$layout.php");
        // clean or delete the current output buffer
        return ob_get_clean();
    }

    function mainContent($callback, $params = []){
        extract($params);
        ob_start();
        require basePath("/views/{$callback}.view.php");
        return ob_get_clean();
    }
}
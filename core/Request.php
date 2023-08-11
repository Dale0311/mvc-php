<?php 
namespace app\core;
class Request{
    function getPath(){
        $path = parse_url($_SERVER['REQUEST_URI'])['path']?? "/";
        return $path;
    }

    function getMethod(){
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }

    function getBody(){
        $body = [];

        if($this->getMethod() === "get"){
            foreach ($_GET as $key => $value) {
                $body[$key] = htmlspecialchars($value);
            }
        }
        if($this->getMethod() === "post"){
            foreach ($_POST as $key => $value) {
                $body[$key] = htmlspecialchars($value);
            }
        }

        return $body;
    }

    function isGet(){
        return $this->getMethod() === "get";
    }
    function isPost(){
        return $this->getMethod() === "post";
    }
    
}
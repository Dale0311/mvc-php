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
}
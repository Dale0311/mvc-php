<?php 
namespace app\core;
class Response{
    function setResponse(int $code){
        http_response_code($code);
    }
}
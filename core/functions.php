<?php 

function dd($foo){
    var_dump($foo);
    die();
}

function basePath($foo){
    return BASEPATH . $foo;
}
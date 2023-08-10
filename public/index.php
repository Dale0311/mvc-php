<?php

use app\core\App;

const BASEPATH =  __DIR__ . "/..";
require BASEPATH . "/core/functions.php";
require basePath("/vendor/autoload.php");

$app = new App();

// routes
$app->router->get("/", function(){
    return "Hello index";
});
$app->router->get("/contact", "contact");


$app->run();
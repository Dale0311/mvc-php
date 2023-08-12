<?php

use app\core\App;
use app\controllers\SiteController;
use app\controllers\AuthController;

const BASEPATH =  __DIR__ . "/..";
require BASEPATH . "/core/functions.php";
require basePath("/vendor/autoload.php");

$app = new App();

// routes
$app->router->get("/", [SiteController::class, "home"]);
$app->router->get("/contact", [SiteController::class, "contact"]);
$app->router->post("/contact", [SiteController::class, "handleContact"]);

$app->router->get("/login", [AuthController::class, "login"]);
$app->router->post("/login", [AuthController::class, "login"]);

$app->router->get("/register", [AuthController::class, "register"]);
$app->router->post("/register", [AuthController::class, "register"]);

$app->run();
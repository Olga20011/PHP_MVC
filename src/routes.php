<?php 
use MVC\Controllers\UserController;
use MVC\Router;


$route = new Router();

$route->addRoute('/' , UserController::class, 'index');

?>
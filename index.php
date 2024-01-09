<?php 

require 'vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$route = require 'src/routes.php';
$route->dispatch($uri);

?>
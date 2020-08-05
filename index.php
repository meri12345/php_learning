<?php

require 'core/functions.php';
require 'TaskObj.php';
    
$query = require 'core/bootstrap.php';

$router = new Router;
require 'routes.php';
$uri = trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');
$request_type = $_SERVER['REQUEST_METHOD'];
require $router->direct($uri,$request_type);

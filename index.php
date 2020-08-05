<?php

require 'core/functions.php';
require 'TaskObj.php';
    
$query = require 'core/bootstrap.php';

$router = new Router;
require 'routes.php';
$uri = trim($_SERVER['REQUEST_URI'],'/');
require $router->direct($uri);


//htmlspecialchars
//var_dump
//die
//ucwords
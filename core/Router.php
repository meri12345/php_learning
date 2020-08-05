<?php

class Router{

    protected $routes = [
    'GET' => [],
    'POST'=> []
    ];
    

    public function define($routes){
        $this->routes = $routes;
    }

    public function direct($uri,$req_type){
        if(array_key_exists($uri, $this->routes[$req_type])){
            return $this->routes[$req_type][$uri];
        }
    }

    public function get($uri,$controller){
        $this->routes['GET'][$uri]=$controller;
    }

    public function post($uri,$controller){
        $this->routes['POST'][$uri]=$controller;
    }
}
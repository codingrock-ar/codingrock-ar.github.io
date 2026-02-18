<?php

class Router {
    private $routes = [];
    private $_requestUrl;

    public function __construct(){
        $this->_requestUrl = $_SERVER['REQUEST_URI'];
    }

    public function addRoute($url, $handler) {
        $this->routes[$url] = $handler;
    }

    public function handleRequest() {
        $arr = explode(":", $this->_requestUrl);
        $handler = $arr[0];
        $method = $arr[1];

        if (array_key_exists($url, $this->routes)) {
            $handler = $this->routes[$url];
            
            include('./controllers/'.$handler.'php');
            // Or call_user_func($handler);
            echo "Handling request for $url";
        } else {
            echo "404 - Not Found";
        }
    }
}

?>
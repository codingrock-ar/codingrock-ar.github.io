<?php

require_once('config.php');

require_once('./libraries/Config.php');
require_once('./libraries/Db.php');
require_once('./libraries/Router.php');
require_once('./libraries/View.php');

// Example usage
$router = new Router();

$router->addRoute('/home', './controllers/home:index');
$router->addRoute('/blog', './controllers/blog:index');
$router->addRoute('/about', './controllers/about:index');

$router->handleRequest();

?>
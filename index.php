<?php 
use \Core\Router;

function my_autoloader($file) {
    include $file . '.php';
}

spl_autoload_register('my_autoloader');

(new Router($_SERVER['REQUEST_URI']));

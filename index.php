<?php 

function my_autoloader($file) {
    include $file . '.php';
}


spl_autoload_register('my_autoloader');

var_dump($_SERVER['REQUEST_URI']);
//(new User\UserHTTPController)->addUser();


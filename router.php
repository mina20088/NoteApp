<?php
require './utils/abort.php';
$routes = require 'routes.php';

function routing(string $path,array $routes): void
{
    if(array_key_exists($path,$routes)){
        require $routes[$path];
    }else{
        abort();
    }

}

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

routing($path,$routes);


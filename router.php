<?php

require base_path ('/utils/abort.php');
$routes = require base_path ('routes.php');

function routing(string $path,array $routes): void
{
    if(array_key_exists($path,$routes)){
        require base_path ($routes[$path]);
    }else{
        abort();
    }

}

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

routing($path,$routes);


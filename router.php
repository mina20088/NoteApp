<?php
require './utils/abort.php';

$path = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => "./controller/HomeController.php",
    '/notes' => "./controller/NotesController.php",
    '/about' => "./controller/AboutController.php",
    '/note' => "./controller/NoteController.php",
    '/contact' => "./controller/ContactController.php",
    '/profile' => './controller/UserprofileController.php',
    '/login' => "./controller/LoginController.php",
    '/logout' => "./controller/LogoutController.php",
];




function routing(string $path,array $routes): void
{
    if(array_key_exists($path,$routes)){
        header("Location:{$routes[$path]}");
        require $routes[$path];
    }else{
        abort();
    }

}

routing($path,$routes);


<?php




if($_SERVER['REQUEST_METHOD'] === "POST"){
    session_destroy();
    $_GET['message'] = "log out";
    header ('location:/login');

}






<?php


if(isset($_SESSION['user_id']) && isset($_SESSION['first_name'])){
    $title = $_SESSION['first_name'] . "Profile";

    require './views/Users/profile.view.php';
}else{
    abort (401);
}















<?php


if(isset($_SESSION['user_id']) && isset($_SESSION['first_name'])){

    Render::view ('Users/profile.view.php',[
        'title'=>  $_SESSION['first_name'] . "Profile"
    ]);
}else{
    abort (401);
}
















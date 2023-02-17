<?php
error_reporting(0);

use database\Database;
require './database/Database.php';
$config = require './config/database.php';
$connection = new Database(
    datasource: $config['connections']['mysql']['driver'],
    config: $config['connections']['mysql']['config'],
    username: $config['connections']['mysql']['username'],
    password: $config['connections']['mysql']['password'],
);



if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['login'])) {
    $user = $_POST['email'];
    $password = $_POST['password'];
    $errors = [];

    $userExists = $connection->query ('select * from users where email = :email',['email'=> $user])->find ();




    if(!$userExists){
        $errors['email'] = 'email is not exists in our database';
    }

    if($userExists['password'] !== $password){
        $errors['password'] = 'password is not correct';
    }

    if(strlen ($user) === 0){
        $errors['email'] = "email is required";
    }
    if(strlen ($password) === 0) {
        $errors['password'] = "password is required";
    }


    if(empty($errors)){
        $user_login = $connection
            ->query (
                'select * from users 
                        where email = :email && password = :password ', ['email' => $user, 'password' => $password] )
            ->findOrFail ( 404 );
        if (!$user_login) {
            echo "wrong email or password";
        }else {
            $_SESSION['user_id'] = $user_login['id'];
            $_SESSION['user_email'] = $user_login['email'];
            $_SESSION['first_name'] = $user_login['first_name'];
            $_SESSION['message'] = "logged in";
            header ("Location:/profile?id={$_SESSION['user_id']}");
        }
    }


}

require "./views/login.views.php";






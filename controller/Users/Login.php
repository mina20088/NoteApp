<?php
error_reporting(1);

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
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errors = [];

    $all = $connection->query ('select * from users')->all ();
    $user  = $connection->query ('select * from users where email = :email',['email'=> $email])->find ();


    if(!Validator::exists ($email,$all,'email')){
        $errors['email'] = 'email is not exists in our database';
    }

    if(!Validator::equals ($user['password'],$password)){
        $errors['password'] = 'password is not correct';
    }

    if(Validator::required ($email)){
        $errors['email'] = "email is required";
    }
    if(Validator::required ($password)) {
        $errors['password'] = "password is required";
    }
    if(!Validator::email ($email) && !Validator::required ($email)){
        $errors['email'] = "invalid email format";
    }



    if(empty($errors)){
        $user_login = $connection
            ->query (
                'select * from users 
                        where email = :email && password = :password ', ['email' => $email, 'password' => $password] )
            ->findOrFail ( 404 );
        if (!$user_login) {
            echo "wrong email or password";
        }else {
            $_SESSION['user_id'] = $user_login['id'];
            $_SESSION['user_email'] = $user_login['email'];
            $_SESSION['first_name'] = $user_login['first_name'];
            $_SESSION['message'] = "logged in";
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (10);
            header ("Location:/profile?id={$_SESSION['user_id']}");
        }
    }


}

require "./views/Users/login.view.php";






<?php

use database\Database;

if(isset($_SESSION['user_id'])){
    require './database/Database.php';
    $config = require './config/database.php';
    $connection = new Database(
        datasource: $config['connections']['mysql']['driver'],
        config: $config['connections']['mysql']['config'],
        username: $config['connections']['mysql']['username'],
        password: $config['connections']['mysql']['password'],
    );
    $title = "create Note";

    if(isset($_POST['createNote'])){
        $note_title = $_POST['title'];
        $note_body  = $_POST['body'];
        $errors = [];

        if(Validator::required ($note_title)){
            $errors['title'] = 'the note title is required';
        }

        if(Validator::required ($note_body)){
           $errors['body'] = "the body is required";
        }

        if(Validator::max ($note_body,1000)){
            $errors['body'] = "notes body must be from 1 char to 1000 chars";
        }

        if(empty($errors)){
            $connection->query ('insert into notes(`title`, `body`, `user_id`) values (:title,:body,:user_id)',[
                'title'=> $note_title,
                'body' => $note_body,
                'user_id' => $_SESSION['user_id']
            ]);
        }

     }


}else{
    abort (401);
}

require 'views/Notes/create.view.php';
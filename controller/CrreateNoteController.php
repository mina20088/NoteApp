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
        $connection->query ('insert into notes(`title`, `body`, `user_id`) values (:title,:body,:user_id)',[
            'title'=> $note_title,
            'body' => $note_body,
            'user_id' => $_SESSION['user_id']
        ]);
     }

    require 'views/Note_Create.views.php';
}else{
    abort (401);
}


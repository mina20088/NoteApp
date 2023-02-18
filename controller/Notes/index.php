<?php

use database\Database;
require './database/Database.php';
$config = require './config/database.php';



$title = "Notes";

$connection = new Database(
    datasource: $config['connections']['mysql']['driver'],
    config: $config['connections']['mysql']['config'],
    username: $config['connections']['mysql']['username'],
    password: $config['connections']['mysql']['password'],
);

if(!isset($_SESSION['user_id'])){
    $notes = $connection->query('select * from notes')->all();
}
if(isset($_SESSION['user_id'])){
    $notes = $connection
        ->query('select * from notes where user_id = :userid',['userid'=> $_SESSION['user_id']])
        ->all();
}




require './views/Notes/index.view.php';
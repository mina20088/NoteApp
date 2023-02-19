<?php
use database\Database;
$config = require base_path ('config/database.php');
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




Render::view ('Notes/index.view.php',[
    'title'=> "Notes",
    'notes' => $notes
]);
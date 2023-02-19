<?php
use database\Database;
$config = require base_path ('config/database.php');
$title = "";
$connection = new Database(
    datasource: $config['connections']['mysql']['driver'],
    config: $config['connections']['mysql']['config'],
    username: $config['connections']['mysql']['username'],
    password: $config['connections']['mysql']['password'],
);
if(isset($_GET['id']) && isset($_SESSION['user_id'])){
    $note = $connection
        ->query('select * from notes 
                       join users 
                       on user_id = users.id 
                       where notes.id = :note_id && users.id = :userid',
                       ['note_id'=> $_GET['id'],'userid'=>$_SESSION['user_id']])
        ->find();

        authorize($note['user_id'] === $_SESSION['user_id']);

}

if(isset($_GET['id']) && !isset($_SESSION['user_id'])){

    $note = $connection
        ->query(
            'select * from notes where id =:id',['id'=> $_GET['id']])
        ->findOrFail();
    $title = $note['title'];
}

Render::view ('Notes/show.view.php',[
    'title'=> $note['title'],
    'note' =>$note
]);
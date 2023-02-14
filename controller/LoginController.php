<?php



use database\Database;

require './database/Database.php';

$title = "Login";

$config = require './config/database.php';

$connection = new Database(
    datasource: $config['connections']['mysql']['driver'],
    config: $config['connections']['mysql']['config'],
    username: $config['connections']['mysql']['username'],
    password: $config['connections']['mysql']['password'],
);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['submit'])) {
        $user = $_POST['email'];
        $password = $_POST['password'];

        $user_login = $connection
            ->query(
                'select * from users 
                        where email = :email && password = :password ', ['email' => $user, 'password' => $password])
            ->findOrFail(404);

        if (!$user_login) {
            echo "wrong email or password";

        } else {
            $_SESSION['user_id'] = $user_login['id'];
            $_SESSION['user_email'] = $user_login['email'];
            $_SESSION['first_name'] = $user_login['first_name'];
            $_SESSION['message'] = "logged in";

        }
    }
}
if ($_SERVER['REQUEST_METHOD'] === "GET") {
    require "./views/login.views.php";
}

/*require "./views/profile.view.php";*/
header('Location:/profile');





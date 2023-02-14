<?php





if(!isset($_SESSION['user_id'])){
    abort(401);
}


require './views/profile.view.php';
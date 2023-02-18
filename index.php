<?php
/*error_reporting(32767);*/

session_start ();

require './utils/dumper.php';

require './utils/sessionDestrory.php';

require './utils/authorization.php';

require './utils/url.php';

require './utils/Validator.php';



$now = time ();
if(isset($_SESSION['expires']) ){
    if($_SESSION['expire'] < $now){
        session_destroy ();
        header ("refresh:5;url=/");
    }

}






require 'router.php';





















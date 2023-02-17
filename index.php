<?php
/*error_reporting(32767);*/

session_start ();
require './utils/dumper.php';
require './utils/sessionDestrory.php';
require './utils/authorization.php';
require './utils/url.php';
require 'router.php';


if(session_status() === PHP_SESSION_ACTIVE){
    abortsession(180);
}


















<?php
function abortsession(int $seconds = 60 , string $location="/logout"): void
{
    $inactive = $seconds;
    if(isset($_SESSION['timeout']) ) {
        $session_life = time() - $_SESSION['timeout'];
        if($session_life > $inactive)
        {
            session_destroy();
        }
    }
    $_SESSION['timeout'] = time();
}




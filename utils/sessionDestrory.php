<?php
function abortSession(int $seconds = 60 , string $location="/logout"): mixed
{
    $inactive = $seconds;
    if(isset($_SESSION['timeout']) ) {
        $session_life = time() - $_SESSION['timeout'];
        $messages = [];
        if($session_life > $inactive)
        {
            header( "refresh:5;url=wherever.php" );
            $messages['session_end'] = 'You\'ll be redirected in about 5 secs. If not, click <a href="wherever.php">here</a>.';
            session_destroy();
        }
    }
    $_SESSION['timeout'] = time();
    return $messages;

}




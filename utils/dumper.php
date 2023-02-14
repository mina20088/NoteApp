<?php
function dd(mixed $value): void
{
/*   xdebug_var_dump($value);
   die();*/

    echo "<pre>";
    echo  var_dump($value);
    echo "</pre>";
}


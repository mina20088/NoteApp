<?php

function abort(int $status = 404): void
{
http_response_code($status);
require "./views/{$status}.views.php";
die();
}

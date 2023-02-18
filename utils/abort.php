<?php

function abort(int $status = 404): void
{
http_response_code($status);
require "./views/Errors/{$status}.view.php";
die();
}

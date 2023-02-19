<?php

function abort(int $status = 404): int
{
    http_response_code($status);
    return require base_path ("views/Errors/{$status}.view.php");

}

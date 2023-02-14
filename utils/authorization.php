<?php
function authorize(bool $condition,int $status = 401): false
{
    if(!$condition){
        abort($status);
    }
    return false;
}
<?php
function isUrl(string $value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}
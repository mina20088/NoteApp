<?php

class Render
{
    public static function view(string $view , array $attributes = []): void
    {
        extract ($attributes);
        require base_path ('views/' . $view);
    }
}
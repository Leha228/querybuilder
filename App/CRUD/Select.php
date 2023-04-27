<?php

namespace App\CRUD;

class Select
{
    public static function write($fields): string
    {
        return "SELECT " . implode(', ', $fields);
    }
}
<?php

namespace App\Operators;

class OrderBy
{
    public static function write($fields): string
    {
        return " ORDER BY " . implode(', ', $fields);
    }
}
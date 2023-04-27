<?php

namespace App\Operators;

class From
{
    public static function write($from): string
    {
        return " FROM " . implode(', ', $from);
    }
}
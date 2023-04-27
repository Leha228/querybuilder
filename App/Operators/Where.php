<?php

namespace App\Operators;

class Where
{
    public static function write($where): string
    {
        return " WHERE " . implode(' AND ', $where);
    }
}
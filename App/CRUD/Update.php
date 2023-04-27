<?php

namespace App\CRUD;

class Update
{
    public static function write($table, $values): string
    {
        return "UPDATE " . $table . " SET " . implode(', ', $values);
    }
}
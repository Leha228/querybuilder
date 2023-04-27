<?php

namespace App\CRUD;

class Insert
{
    public static function write(string $table, array $fields, array $values): string
    {
        return "INSERT INTO " . $table . "(" . implode(', ', $fields) . ") VALUES (" . implode(", ", $values) . ")";
    }
}
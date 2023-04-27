<?php

namespace App\CRUD;

class Delete
{
    public static function write($table): string
    {
        return "DELETE FROM " . $table;
    }
}
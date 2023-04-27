<?php

    use App\QueryBuilder;

    require "vendor/autoload.php";

    $configDB = [
        "type" =>"mysql",
        "login" => "root",
        "password" => "",
        "host" => "localhost",
        "name" => "autoshop"
    ];

    $db = new QueryBuilder($configDB);

    $querySelect = $db->select("*")
        ->from("autoshop.users")
        ->where("name = alex")
        ->limit(1)
        ->execute();

    $queryInsert = $db->insert(
        "autoshop.users",
        ["name", "age", "mail"],
        ["'tom'", 25, "'tom@mail.ru'"]
    )->execute();

    $queryUpdate = $db->update(
        "autoshop.users",
        "name = Alex")
        ->where("name = alex")
        ->execute();

    $queryDelete = $db->delete("autoshop.users")
        ->where("name = alex", "age = 12")
        ->execute();

    $queryOrderBy = $db->select("*")
        ->from("autoshop.users")
        ->order_by("age DESC")
        ->execute();

    print_r($queryOrderBy);






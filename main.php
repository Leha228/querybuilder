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

    /*
     *
     * Тестовые данные для проверки. Выводит просто строку SQL
     *
     */

    $querySelect = $db->select("*")
        ->from("autoshop.users")
        ->where("name = alex")
        ->limit(1);

    print_r("<br><br>" . $querySelect->execute() . "<br><br>");

    $queryInsert = $db->insert(
        "autoshop.users",
        ["name", "age", "mail"],
        ["'tom'", 25, "'tom@mail.ru'"]
    );

    print_r($queryInsert->execute() . "<br><br>");

    $queryUpdate = $db->update(
        "autoshop.users",
        "name = Alex")
        ->where("name = alex");

    print_r($queryUpdate->execute() . "<br><br>");

    $queryDelete = $db->delete("autoshop.users")
        ->where("name = alex", "age = 12");

    print_r($queryDelete->execute() . "<br><br>");

    $queryOrderBy = $db->select("*")
        ->from("autoshop.users")
        ->order_by("age DESC");

    print_r($queryOrderBy->execute() . "<br><br>");





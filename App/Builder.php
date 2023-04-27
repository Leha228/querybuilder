<?php

namespace App;

use PDO;
use PDOException;

class Builder
{
    private string $typeDB;
    private string $loginDB;
    private string $passwordDB;
    private string $hostDB;
    private string $nameDB;
    protected mixed $connection;
    protected string $query = "";

    public function __construct(array $configDB)
    {
        $this->typeDB = $configDB["type"];
        $this->loginDB = $configDB["login"];
        $this->passwordDB = $configDB["password"];
        $this->hostDB = $configDB["host"];
        $this->nameDB = $configDB["name"];
    }

    protected function connectDB(): void
    {
        try {
            $this->connection = new PDO(
                $this->typeDB . ":host=" . $this->hostDB,
                $this->loginDB,
                $this->passwordDB
            );

            print_r($this->connection);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function execute(): string
    {

        // РАССКОМЕНТИРОВАТЬ ДЛЯ ПРОВЕРКИ В БД

        /*
         * $stmt = $this->connection->query($this->query);
         * return $stmt->fetchAll(PDO::FETCH_ASSOC);
        */

        return $this->query;
    }
}
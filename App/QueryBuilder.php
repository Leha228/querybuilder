<?php

namespace App;

use AllowDynamicProperties;
use App\CRUD\Delete;
use App\CRUD\Insert;
use App\CRUD\Select;
use App\CRUD\Update;
use App\Operators\From;
use App\Operators\OrderBy;
use App\Operators\Where;
use PDO;

#[AllowDynamicProperties]
class QueryBuilder extends Builder
{
    private array $fields;
    private array $from;

    public function __construct(array $configDB)
    {
        parent::__construct($configDB);
        $this->connectDB();
    }

    public function from(string ...$from): self {
        $this->query .= From::write($from);
        return $this;
    }

    public function where(string ...$where): self {
        $this->query .= Where::write($where);
        return $this;
    }

    public function select(string ...$fields): self {
        $this->query .= Select::write($fields);
        return $this;
    }

    public function insert(string $table, array $fields, array $values): self {
        $this->query = Insert::write($table, $fields, $values);
        return $this;
    }

    public function update(string $table, string ...$values): self {
        $this->query = Update::write($table, $values);
        return $this;
    }

    public function delete(string $table): self {
        $this->query = Delete::write($table);
        return $this;
    }

    public function limit(int $limit): self {
        $this->query .= " LIMIT " . $limit;
        return $this;
    }

    public function order_by(string ...$fields): self {
        $this->query .= OrderBy::write($fields);
        return $this;
    }

    public function execute(): string
    {
        /*$query = $this->query;
        $this->query = "";
        return $query;*/

        $stmt = $this->connection->query($this->query);
        $this->query = "";
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
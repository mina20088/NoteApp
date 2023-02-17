<?php

namespace database;

use PDO;
use PDOStatement;

class Database
{
    protected string $dsn;
    protected PDO $connection;

    protected PDOStatement $statement;

    public function __construct(string $datasource, array $config, string $username, string $password)
    {
        $this->dsn = "$datasource:" .  http_build_query($config, '', ";");
        $this->connection = new PDO(dsn: $this->dsn, username: $username, password: $password, options: [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }


    public function query(string $query, array $parameter = []): static
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($parameter);
        return $this;
    }

    public function all(): false|array
    {
        return $this->statement->fetchAll();
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function findOrFail(){
        $result = $this->find();
        if(!$result){
            abort();
        }
        return $result;
    }
}
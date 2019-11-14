<?php

namespace app\engine;

class Db {

    private $config = [
        'driver' => 'mysql',
        'host' => 'localhost:8889',
        'login' => 'root',
        'password' => 'root',
        'database' => 'shop',
        'charset' => 'utf8'
    ];

    private $connection = null;

    private function getConnection() {
        if (is_null($this->connection)) {
            $this->connection = new \PDO($this->prepareDSNString(),
            $this->config['login'],
            $this->config['password']
            );
        }
        return $this->connection;
    }
    private function prepareDSNString() {
        return sprintf("%s:host=%s;dbname=%s;charset=%s",
        $this->config['driver'],
            $this->config['host'],
            $this->config['database'],
            $this->config['charset']
        );
}

    public function queryOne($sql, $params = [])
    {
        return $sql;
    }

    public function queryAll($sql, $params = [])
    {
        return $sql;
    }
}
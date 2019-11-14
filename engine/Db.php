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

    private function getConnection()
    //Вызываем функцию каждый раз когда хотим выполнить запрос
    {
        if (is_null($this->connection)) {
            $this->connection = new \PDO($this->prepareDSNString(),
            $this->config['login'],
            $this->config['password']
            );
        }
        return $this->connection;
    }

    private function query($sql, $params)
    //Выполняет запрос и возврашает результат
    {
        $pdoStatment = $this->getConnection()->prepare($sql);
        $pdoStatment->execute($params);
        return $pdoStatment;
    }

    private function execute($sql, $params) {
        $this->query($sql,$params);
        return true;
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
        return $this->queryAll($sql,$params)[0];
    }

    public function queryAll($sql, $params = [])
    {
        return $this->query($sql, $params)->fetchAll();
    }
}
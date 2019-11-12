<?php

namespace app\models;

use app\engine\Db;

class Product
{
    public $id;
    public $name;
    public $description;
    public $price;

    protected $db;

    public function __construct(Db $db)
    {
        $this->db = $db;
    }

    public function getOne ($id) {
        $sql = "SELECT * FROM `goods` WHERE id = {$id}";
        return $this->db->queryOne($sql);
    }

    public function getAll () {
        $sql = "SELECT * FROM `goods`";
        return $this->db->queryAll($sql);
    }


}

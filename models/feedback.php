<?php


namespace app\models;
use app\engine\Db;

class Feedback extends Model
{
    public $id;
    public $subject;
    public $description;

    public function getTableName()
    {
        return 'feedback';
    }
}

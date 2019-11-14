<?php

use app\engine\{Autoload,Db};
use app\models\{Product, Users};
use app\interfaces\IModels;
//use app\config\config;


include "../engine/Autoload.php";
include "../config/config.php";

spl_autoload_register([new Autoload(), 'loadClass']);

// $db = new Db();

$product = new Product(new Db());
var_dump($product->getAll());

//$product->getOne(1);

//$users = new \app\models\Users($db);



//function foo(IModels $model) {
//    return $model->getTableName();
//}
//var_dump($users);
//echo foo($users);

//$product = new \app\models\feedback(new Db());

//echo $product->getAll();





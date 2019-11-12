<?php

use app\engine\{Autoload,Db};
use app\models\Product;
use app\interfaces\IModels;

include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


$product = new Product(new Db());
$users = new Users(new Db());


function foo(IModels $model) {
    return $model->getTableName();
}

echo foo($users);

//$product = new \app\models\feedback(new Db());

//echo $product->getAll();





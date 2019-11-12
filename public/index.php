<?php

use app\engine\{Autoload,Db};
use app\models\Product;

include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Product(new Db());

var_dump($product);

echo $product->getOne(4);




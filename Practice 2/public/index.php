<?php

include "../engine/Autoload.php";

function __autoload($className) {
    (new Autoload())->loadclass($className);
}

$product = new Product();

var_dump($product);


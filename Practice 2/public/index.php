<?php

include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadclass']);

$product = new Db();

var_dump($product);


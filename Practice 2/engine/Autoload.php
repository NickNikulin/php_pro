<?php


class Autoload
{
    public function loadclass($className) {
        include "../models/{classname}.php";
    }

}
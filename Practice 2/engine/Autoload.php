<?php


class Autoload
{
    private $path = [
        'models',
        'engine'
    ];

    public function loadclass($className) {
        foreach ($this->path as $path) {
            $fileName = "../{$path}/{$className}.php";
            if (file_exists($fileName)) {
                include $fileName;
                break;
            }
        }

    }

}
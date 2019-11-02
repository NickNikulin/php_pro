<?php

class Unit
{
    public $name;
    public $health;
    public $damage;

    public function __construct($name, $health, $damage)

    {
        $this->name = $name;
        $this->health = $health;
        $this->damage = $damage;
    }

    public function attack(Unit $unit)
    {
        echo $this->name . " атакует " . $unit->name . " на " . $this->damage . " урона.";
        $unit->health -= $this->damage;
    }
    public function deffence(Unit $unit){
    }
}

$player = new Unit("Конан", 200, 20);
$monster = new Unit("Монстр", 100, 10);
$angel = new Unit("Михаил", 50, 50);
$monakh = new Unit("Сергей", 80, 300);

var_dump($monster);

$monster->attack($monakh);

var_dump($monakh);

$monakh->attack($monster);

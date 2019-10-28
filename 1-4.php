<?php

class Unit extends Defender{
public $name;
public $health;
public $damage;

public function __construct($name, $health, $damage)
{
$this->name = $name;
$this->health = $health;
$this->damage = $damage;
}

public function attack(Unit $unit) {
echo $this->name . " атакует " . $unit->name . " на " . $this->damage . " урона.";
$unit->health -= $this->damage;
}

public function defense_attack (Unit $unit)
{
if ($unit->armor > 0) {
$unit->armor -= $this->damage;
}
else {
$unit->health -= $this->damage;
}
echo $this->name . " атакует " . $unit->name . " на " . $this->damage . " урона.";
}
}

class Defender{
public $super_blow;
public $armor;
public function __construct()
{

}

/**
* @return mixed
*/
public function getArmor()
{
return $this->armor;
}

/**
* @return mixed
*/
public function getSuperBlow()
{
return $this->super_blow;
}

/**
* @param mixed $armor
*/
public function setArmor($armor)
{
$this->armor = $armor;
}

/**
* @param mixed $super_blow
*/
public function setSuperBlow($super_blow)
{
$this->super_blow = $super_blow;
}

}

$player = new Unit("Конан", 200, 20);
$monster = new Unit("Монстр", 100, 10);
$angel = new Unit("Михаил", 50, 50);
$angel->setArmor(300);
$angel->setSuperBlow(50);

var_dump($monster);

$monster->defense_attack($angel);

var_dump($angel);
<?php

class Weapon {
    public $name;
    public $number;
    public $color;
    public $consumption;

    public function __construct($name, $number, $color, $consumption)
    {
      $this->name = $name;
      $this->number = $number;
      $this->color = $color;
      $this->consumption = $consumption;
    }

    // 名前
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $name = $this->name;
    }
    // 数字
    public function getNumber()
    {
        return $this->number;
    }
    public function setNumber($number)
    {
        $this->number = $number;
    }

}
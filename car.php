<?php

class Truck
{
  public $color = 'silver';
  public $model = 't100';
  public $playlist = [];
}

interface TruckSpecs {
  public function calcMPG();
}

class Pickup extends Truck implements TruckSpecs
{
  public $engine = 'v8';
  private $fuelEfficiency;

  public function __construct($fuelEfficiency)
  {
    $this -> fuelEfficiency = $fuelEfficiency;
  }

  public function calcMPG()
  {
    if ($this -> fuelEfficiency == 'poor') return 10;
    if ($this -> fuelEfficiency == 'average') return 20;
    else return 30;
  }
  public function getFuelEfficiency()
  {
    return $this -> fuelEfficiency;
  }
}

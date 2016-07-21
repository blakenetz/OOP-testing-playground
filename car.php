<?php

class Truck
{
  public $color = 'silver';
  public $model = 't100';
  public $playlist = [];
}

class Pickup extends Truck
{
  public $engine = 'v8';
}

<?php
use PHPUnit\Framework\TestCase;
require_once('car.php');

Class Test extends TestCase
{
  public function testArrayLists()
  {
    $this->assertObjectHasAttribute('color', new Truck);
    $this->assertObjectHasAttribute('model', new Truck);
  }
}

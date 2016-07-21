<?php
use PHPUnit\Framework\TestCase;
require_once('car.php');

Class Test extends TestCase
{
  public function testObjectProperties()
  {
    $this->assertObjectHasAttribute('color', new Truck);
    $this->assertObjectHasAttribute('model', new Truck);
    $this->assertObjectNotHasAttribute('mirrorDice', new Truck);
  }
  public function testArrays()
  {
    $this->assertEmpty([]);
    $truck = new Truck();
    $playlist = $truck->playlist;
    $this->assertEmpty($playlist);

    array_push($playlist, 'Get jiggy with it');
    $this->assertCount(1, $playlist);

    array_push($playlist, "walk don't run");
    $this->assertEquals("walk don't run", $playlist[count($playlist)-1]);

    array_push($playlist, "wu tang ain't nothing to fuck with");
    $this->assertEquals("wu tang ain't nothing to fuck with", array_pop($playlist));
  }
}

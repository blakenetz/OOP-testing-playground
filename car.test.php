<?php
use PHPUnit\Framework\TestCase;
require_once('car.php');

Class Test extends TestCase
{
  public function testObjectProperties()
  {
    $truck = new Truck();

    $this->assertObjectHasAttribute('color', $truck);
    $this->assertObjectNotHasAttribute('mirrorDice', $truck);
    $this->assertEquals("silver", $truck->color);

    $truck->color = 'gunmetal';
    $this->assertEquals("gunmetal", $truck->color);

  }
  public function testArrays()
  {
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
  public function testInheritance()
  {
    $pickup = new Pickup();
    $this->assertEquals('silver', $pickup->color);
    $this->assertEquals('v8', $pickup->engine);
  }
  public function test
}

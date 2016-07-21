<?php
use PHPUnit\Framework\TestCase;
include('car.php');

Class Test extends TestCase
{
  public function testVariables()
  {
    $color->assertEquals('green');
  }
}

echo "A $color $model";

// public function import() {
//   $this->assertTrue(true);
// }

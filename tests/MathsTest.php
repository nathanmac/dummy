<?php

require dirname(__FILE__)."/../vendor/autoload.php";

use Acme\Maths;

class MathsTest extends \PHPUnit_Framework_TestCase {

    public function testSum()
    {
        $maths = new Maths();

        $this->assertEquals(15, $maths->sum(10, 5));
        $this->assertEquals(20, $maths->sum(8, 12));
    }

    public function testMultiply()
    {
        $maths = new Maths();

        $this->assertEquals(50, $maths->multiply(10, 5));
        $this->assertEquals(96, $maths->multiply(8, 12));
    }

    public function testDivide()
    {
        $maths = new Maths();

        $this->assertEquals(2, $maths->divide(10, 5));
        $this->assertEquals(10, $maths->divide(40, 4));
    }

    public function testSubtract()
    {
        $maths = new Maths();

        $this->assertEquals(5, $maths->subtract(10, 5));
        $this->assertEquals(4, $maths->subtract(12, 8));
    }
}

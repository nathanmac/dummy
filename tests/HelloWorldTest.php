<?php

require dirname(__FILE__)."/../vendor/autoload.php";

use Acme\HelloWorld;

class HelloWorldTest extends PHPUnit_Framework_TestCase {

    /** @test */
    public function greeting_message()
    {
        $hello = new HelloWorld();

        $this->assertEquals("Hello, Jack", $hello->hello("Jack"));
        $this->assertEquals("Hello, Jane", $hello->hello("Jane"));
    }
}

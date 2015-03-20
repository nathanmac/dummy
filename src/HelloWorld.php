<?php namespace Acme;

class HelloWorld {

    /**
     * Greeter Message
     *
     * @param string $name Name to greet.
     *
     * @return string
     */
    public function hello($name)
    {
        return "Hello, " . $name;
    }
}
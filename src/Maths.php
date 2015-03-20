<?php namespace Acme;

class Maths implements MathsInterface {

    /**
     * @param $x
     * @param $y
     *
     * @return mixed
     */
    public function sum($x, $y)
    {
        return $x + $y;
    }

    /**
     * @param $x
     * @param $y
     *
     * @return mixed
     */
    public function multiply($x, $y)
    {
        return $x * $y;
    }

    /**
     * @param $x
     * @param $y
     *
     * @return float
     */
    public function divide($x, $y)
    {
        return $x/$y;
    }

    /**
     * @param $x
     * @param $y
     *
     * @return mixed
     */
    public function subtract($x, $y)
    {
        return $x - $y;
    }
}
<?php
namespace Acme;

interface MathsInterface {
    /**
     * @param $x
     * @param $y
     *
     * @return mixed
     */
    public function sum($x, $y);

    /**
     * @param $x
     * @param $y
     *
     * @return mixed
     */
    public function multiply($x, $y);

    /**
     * @param $x
     * @param $y
     *
     * @return float
     */
    public function divide($x, $y);

    /**
     * @param $x
     * @param $y
     *
     * @return mixed
     */
    public function subtract($x, $y);
}
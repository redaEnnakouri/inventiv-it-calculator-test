<?php

namespace App\Services\Calculator;


interface CalculatorInterface
{

    /**
     * @param array $attributes
     */
    public function calculate(array $attributes):float;
}

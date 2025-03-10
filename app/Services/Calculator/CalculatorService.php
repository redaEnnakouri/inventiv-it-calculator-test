<?php

namespace App\Services\Calculator;

use DivisionByZeroError;
use Illuminate\Support\Arr;
use InvalidArgumentException;

class CalculatorService implements CalculatorInterface
{
    public function calculate(array $attributes): float
    {
        return match ($attributes['operation']) {
            'add' => $attributes['num1'] + $attributes['num2'],
            'subtract' => $attributes['num1'] - $attributes['num2'],
            'multiply' => $attributes['num1'] * $attributes['num2'],
            'divide' => $this->divide(Arr::only($attributes, ['num1', 'num2'])),
            default => throw new InvalidArgumentException("Opération invalide"),
        };
    }

    private function divide(array $attributes): float
    {
        if ($attributes['num2'] == 0) {
            throw new DivisionByZeroError("Division par zéro impossible");
        }
        return $attributes['num1'] / $attributes['num2'];
    }
}

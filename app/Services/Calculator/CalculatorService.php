<?php

namespace App\Services\Calculator;

use App\Enums\Calculator\OperatorsEnum;
use DivisionByZeroError;
use Illuminate\Support\Arr;
use InvalidArgumentException;

class CalculatorService implements CalculatorInterface
{
    /**
     * @param array $attributes
     * @return float
     */
    public function calculate(array $attributes): float
    {
        $num1 = (float)$attributes['num1'];
        $num2 = (float)$attributes['num2'];
        return match ($attributes['operation']) {
            OperatorsEnum::ADDITION->value => $num1 + $num2,
            OperatorsEnum::SUBTRACTION->value => $num1 - $num2,
            OperatorsEnum::MULTIPLICATION->value=> $num1 * $num2,
            OperatorsEnum::DIVISION->value => $this->divide($num1, $num2),
            default => throw new InvalidArgumentException("Opération invalide"),
        };
    }

    /**
     * @param float $num1
     * @param float $num2
     * @return float
     */
    private function divide(float $num1, float $num2): float
    {
        if ($num2 == 0) {
            throw new DivisionByZeroError("Division par zéro impossible");
        }
        return $num1 / $num2;
    }
}

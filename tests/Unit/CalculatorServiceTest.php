<?php


use App\Enums\Calculator\OperatorsEnum;
use App\Services\Calculator\CalculatorService;

it('can add two numbers', function () {
    $service = new CalculatorService();
    $result = $service->calculate([
        'num1' => 3,
        'num2' => 3,
        'operation' => OperatorsEnum::ADDITION->value
    ]);
    expect((int)$result)->toBe(6);
});

it('can subtract two numbers', function () {
    $service = new CalculatorService();
    $result = $service->calculate([
        'num1' => 3,
        'num2' => 1,
        'operation' => OperatorsEnum::SUBTRACTION->value
    ]);
    expect((int)$result)->toBe(2);
});

it('can multiply two numbers', function () {
    $service = new CalculatorService();
    $result = $service->calculate([
        'num1' => 3,
        'num2' => 3,
        'operation' => OperatorsEnum::MULTIPLICATION->value
    ]);
    expect((int)$result)->toBe(9);

});

it('can divide two numbers', function () {
    $service = new CalculatorService();
    $result = $service->calculate([
        'num1' => 10,
        'num2' => 2,
        'operation' => OperatorsEnum::DIVISION->value
    ]);
    expect((int)$result)->toBe(5);
});




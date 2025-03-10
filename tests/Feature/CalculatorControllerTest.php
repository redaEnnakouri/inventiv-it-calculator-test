<?php

use App\Enums\Calculator\OperatorsEnum;
use App\Services\Calculator\CalculatorService;
use function Pest\Laravel\post;
use function Pest\Laravel\get;

beforeEach(function () {
    $this->service = new CalculatorService();
    $this->api = 'api/calculator';

});

it('displays the calculator page', function () {
    get('/')->assertStatus(200);
});

it('performs addition correctly', function () {
    post($this->api, ['num1' => 2, 'num2' => 3, 'operation' => OperatorsEnum::ADDITION->value])
        ->assertSee('5');
});

it('performs subtraction correctly', function () {
    post($this->api, ['num1' => 10, 'num2' => 4, 'operation' => OperatorsEnum::SUBTRACTION->value])
        ->assertSee('6');
});

it('returns an error for division by zero', function () {
    post($this->api, ['num1' => 10, 'num2' => 0, 'operation' => OperatorsEnum::DIVISION->value])
        ->assertStatus(400)
        ->assertJson(['message' => 'Division par zéro impossible']);
});

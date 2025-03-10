<?php


use App\Http\Controllers\Api\CalculatorController;
use Illuminate\Support\Facades\Route;


Route::post('/calculator', [CalculatorController::class, 'calculate']);


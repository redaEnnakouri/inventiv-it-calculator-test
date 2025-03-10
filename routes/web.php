<?php

use App\Http\Controllers\Inertia\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->name('calculate.')
    ->controller(CalculatorController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });

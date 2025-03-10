<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calculator\CalculatorFormRequest;
use App\Services\Calculator\CalculatorInterface;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class CalculatorController extends Controller
{


    /**
     * @param CalculatorFormRequest $request
     * @param CalculatorInterface $calculatorInterface
     * @return JsonResponse|RedirectResponse
     */
    public function calculate(CalculatorFormRequest $request, CalculatorInterface $calculatorInterface): JsonResponse|RedirectResponse
    {
        try {
            $result = $calculatorInterface->calculate($request->validated());
            return response()->json(['result' => $result]);
        } catch (\DivisionByZeroError $e) {
            return response()->json(['message' => 'Division par zéro impossible'], 400);
        } catch (Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}

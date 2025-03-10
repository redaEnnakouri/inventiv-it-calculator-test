<?php

namespace App\Http\Requests\Calculator;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CalculatorFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'num1' => 'required|numeric',
            'num2' => 'required|numeric',
            'operation' => 'required|in:add,subtract,multiply,divide'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'num1.required' => 'The first number is required',
            'num1.numeric' => 'The first number must be a number',
            'num2.required' => 'The second number is required',
            'num2.numeric' => 'The second number must be a number',
            'operation.required' => 'The operation is required',
            'operation.in' => 'The operation must be one of the following: add, subtract, multiply, divide'

        ];
    }
}

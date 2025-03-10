<?php

namespace App\Enums\Calculator;

enum OperatorsEnum: string
{
   case ADDITION ='add';
   case SUBTRACTION = 'subtract';
    case MULTIPLICATION = 'multiply';
    case DIVISION = 'divide';
    case INVALID = 'invalid';
}

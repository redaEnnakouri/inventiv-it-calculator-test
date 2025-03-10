<?php

namespace App\Http\Controllers\Inertia;

use App\Http\Controllers\Controller;

use Inertia\Inertia;
use Inertia\Response;

class CalculatorController extends Controller
{

    /**
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render('Calculator');
    }

}

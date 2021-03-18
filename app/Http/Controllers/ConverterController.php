<?php

namespace App\Http\Controllers;

use Converter;

use App\Http\Requests\FactorialRequest;

class ConverterController extends Controller
{
    /**
     * Точка входа в приложение
     *
     * @return View представление
     */
    public function index()
    {
        return view('index');
    }
    /**
     * числение факториала
     *
     * @param  FactorialRequest $request
     *
     * @return View представление
     */
    public function factorial(FactorialRequest $request)
    {
        // Получение данных
        $number = $request->number;
        $factorial = Converter::factorial($number);
        // Передача данных представлений
        return view('index', [
            'number' => $number,
            'factorial' => $factorial,
        ]);
    }
}

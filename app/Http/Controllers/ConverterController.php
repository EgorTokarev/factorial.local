<?php

namespace App\Http\Controllers;

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

        // Вычисление факториала
        $factorial = 1;
        for ($i=1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        // Передача данных представлений
        return view('index', [
            'number' => $number,
            'factorial' => $factorial,
        ]);
    }
}

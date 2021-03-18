<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @param  request $request
     *
     * @return View представление
     */
    public function factorial(Request $request)
    {
        // Получение данных
        $number = $request->number;
        // Валидация
        $validated = $request->validate([
            'number' => 'required|integer|min:0',
        ]);
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

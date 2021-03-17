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
}

<?php
/**
 * Конвертер
 *
 * PHP version 7
 *
 * @category Laravel
 * @package  App
 * @author   Student <student@example.com>
 * @license  htto://unlicense.org/ Unlicense
 * @link     http://php.net
 */


namespace App\Services;

/**
 * Класс Конвертер
 */
class Converter
{
    public function factorial(int $number)
    {
        $factorial = 1;
        for ($i=1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
    public function fahrenheit(int $number)
    {
        $fahrenheit = ($number * 9/5) + 32;
        return $fahrenheit;
    }
    public function celsius(int $number)
    {
        $celsius = ($number * 9/5) - 32;
        return $celsius;
    }
}

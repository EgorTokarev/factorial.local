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
    public function factorial(int $number) : int
    {
        $factorial = 1;
        for ($i=1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

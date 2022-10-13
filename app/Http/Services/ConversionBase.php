<?php

namespace App\Http\Services;

/**
 * Class ConversionBase
 *
 * @package App\Http\Services
 */
abstract class ConversionBase
{
    /**
     * @param string $valueToConvert
     * @return string|int
     */
    abstract function convert(string $valueToConvert): int|string;

    /**
     * Returns an array with integers and there corresponding roman numeral as keys
     *
     * @return int[]
     */
    protected function getConversionArray(): array
    {
        return [
            'C̅' => 100000,
            'X̅C̅' => 90000,
            'L̅'=> 50000,
            'X̅L̅' => 40000,
            'X̅'=> 10000,
            'I̅X̅' => 9000,
            'V̅' => 5000,
            'I̅V̅' => 4000,
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        ];
    }
}

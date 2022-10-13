<?php

namespace App\Http\Factories;

use App\Http\Services\ConversionBase;
use App\Http\Services\IntegerToRomanNumeral;
use App\Http\Services\RomanNumeralToInteger;

/**
 * Class ConversionFactory
 *
 * @package App\Http\Factories
 */
class ConversionFactory
{
    /**
     * @param string $valueToConvert
     * @return ConversionBase
     */
    public function getConversionService(string $valueToConvert): ConversionBase
    {
        if (is_numeric($valueToConvert)) {
            return new IntegerToRomanNumeral();
        }

        return new RomanNumeralToInteger();
    }
}

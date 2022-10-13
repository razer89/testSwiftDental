<?php

namespace App\Http\Services;

/**
 * Class RomanNumeralToInteger
 *
 * @package App\Http\Services
 */
class RomanNumeralToInteger extends ConversionBase
{

    /**
     * Converts a roman numeral to its integer counterpart
     *
     * @param string $valueToConvert
     * @return int
     */
    public function convert(string $valueToConvert): int
    {
        $romanNumeralPairs = $this->getConversionArray();

        $result = 0;

        foreach ($romanNumeralPairs as $romanNumeral => $integerValue) {
            while (str_starts_with($valueToConvert, $romanNumeral)) {
                $result += $integerValue;
                $valueToConvert = substr($valueToConvert, strlen($romanNumeral));
            }
        }

        return $result;
    }
}

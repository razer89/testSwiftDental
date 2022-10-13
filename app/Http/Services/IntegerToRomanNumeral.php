<?php

namespace App\Http\Services;

/**
 * Class IntegerToRomanNumeral
 *
 * @package App\Http\Services
 */
class IntegerToRomanNumeral extends ConversionBase
{
    /**
     * @param string $valueToConvert
     * @return string
     */
    public function convert(string $valueToConvert): string
    {
        return $this->convertInt((int) $valueToConvert);
    }

    /**
     * Converts an integer to its roman numeral counterpart
     *
     * @param int $integerToConvert
     * @return string
     */
    public function convertInt(int $integerToConvert): string
    {
        // Set up an empty string
        $romanNumeralString = '';

        // Get integer to roman numeral conversion pairs and sort by descending
        $conversionPairs = $this->getConversionArray();

        foreach ($conversionPairs as $romanNumeral => $integerPair) {
            // How many times does the integer key fit into the requested integer
            $count = intval($integerToConvert / $integerPair);

            // Add the corresponding roman numeral and repeat for the number in count
            $romanNumeralString .= str_repeat($romanNumeral, $count);

            // Set the requested integer to the remaining value
            $integerToConvert = $integerToConvert % $integerPair;
        }

        return $romanNumeralString;
    }
}

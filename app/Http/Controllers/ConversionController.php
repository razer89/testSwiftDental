<?php

namespace App\Http\Controllers;

use App\Http\Factories\ConversionFactory;
use Illuminate\Http\Request;

/**
 * Class ConversionController
 *
 * @package App\Http\Controllers
 */
class ConversionController
{
    /**
     * @param Request $request
     * @param ConversionFactory $conversionFactory
     * @return \Illuminate\Contracts\View\View
     */
    public function convert(Request $request, ConversionFactory $conversionFactory): \Illuminate\Contracts\View\View
    {
        $request->validate([
            'number-to-convert' => ['required', 'alpha_num'],
        ]);

        $valueToConvert = $request->input('number-to-convert');

        $conversionService = $conversionFactory->getConversionService($valueToConvert);

        $result = $conversionService->convert($valueToConvert);

        return view('welcome', ['result' => $result]);
    }
}

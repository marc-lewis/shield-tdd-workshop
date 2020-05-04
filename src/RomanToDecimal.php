<?php

namespace RomanToDecimal;

class RomanToDecimal
{
    private $charLookUp = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'C' => 100,
        'M' => 1000
    ];
    private $previousDigit = 0;

    public function convert(string $romanCharString)
    {
        $romanCharsArray = str_split($romanCharString);
        return array_reduce($romanCharsArray, function($carry, $newChar) {
            $newDigit = $this->charLookUp[$newChar];
            $sum = $carry + $newDigit;
            if ($newDigit > $this->previousDigit) {
                $sum -= (2 * $this->previousDigit);
            }
            $this->previousDigit = $newDigit;
            return $sum;
        });
    }
}
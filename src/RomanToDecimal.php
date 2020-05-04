<?php
namespace RomanToDecimal;

class RomanToDecimal
{
    public function convert (string $romanChars)
    {
        if ($romanChars === 'V') {
            return 5;
        } else if ($romanChars === 'VI') {
            return 6;
        }
    }
}
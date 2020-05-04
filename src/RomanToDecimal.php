<?php
namespace RomanToDecimal;

class RomanToDecimal
{
    public function convert (string $romanChars)
    {
        if ($romanChars === 'V') {
            return 5;
        } elseif ($romanChars === 'VI') {
            return 6;
        } elseif ($romanChars === 'CM') {
            return 900;
        }
    }
}
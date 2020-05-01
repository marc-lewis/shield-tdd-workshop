<?php

use PHPUnit\Framework\TestCase;

class RomanToDecimalTest extends TestCase
{
    public function testRomanToDecimal()
    {
        $romanToDecimal = new RomanToDecimal();
        $this->assertEquals($romanToDecimal->convert('V'), 5);
    }
}


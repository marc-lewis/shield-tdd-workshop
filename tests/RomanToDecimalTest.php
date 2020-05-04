<?php

use PHPUnit\Framework\TestCase;
use RomanToDecimal\RomanToDecimal;

class RomanToDecimalTest extends TestCase
{
    /**
     * Verify romanToDecimal returns correct result.
     *
     * @return void
     * @dataProvider providerTestRomanToDecimal
     */
    public function testRomanToDecimal($functionArg, $expectedResult)
    {
        $romanToDecimal = new RomanToDecimal();
        $this->assertEquals($romanToDecimal->convert($functionArg), $expectedResult);
    }

    public function providerTestRomanToDecimal()
    {
        return [
            ['IV', 4],
            ['V', 5],
            ['VI', 6],
            ['CH', 'H isn\'t a roman numeral!']
        ];
    }
}


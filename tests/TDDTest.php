<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TDD\TDD;

final class TDDTest extends TestCase
{
    public function testTrue()
    {
        $TDD = new TDD();
        $this->assertTrue($TDD->returnTrue());
    }
}


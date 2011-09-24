<?php
require_once __DIR__ . '/../src/DieClass.php';

class DieClassTest extends PHPUnit_Framework_TestCase
{
    public function testInitialValueIsGood()
    {
        $die = new DieClass();

        $this->assertTrue($die->getFaceValue() >= 1);
        $this->assertTrue($die->getFaceValue() <= 6);
    }
}

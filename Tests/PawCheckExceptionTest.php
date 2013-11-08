<?php

use  Vendor\NyanCat;

class PawCheckExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException        NyanCat
     */
    public function testExceptionHasRightMessage()
    {
        throw new Exception('Ololo', 20);
    }

    /**
     * @expectedException     InvalidArgumentException
     * @expectedExceptionCode 20
     */
    public function testExceptionHasRightCode()
    {
        throw new InvalidArgumentException('Ololo', 20);
    }
}

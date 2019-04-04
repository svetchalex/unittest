<?php
require_once __DIR__ . '/../Circle.php';

use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    public function test__construct()
    {
        $this->expectException(Exception::class);
        $circle = new Circle(-1);
        $this->fail('Тест не пройден');
    }

    /**
     * @dataProvider providerArea
     */
    public function testGetArea($radius, $exdpected)
    {
        $circle = new Circle($radius);
        $area = $circle->getArea();
        $this->assertSame($exdpected, $area);
    }

    public function providerArea()
    {
        return array(
            array(10, 314.15926535898),
            array(15, 706.85834705771),
            array(5, 78.539816339745)
        );
    }

    /**
     * @dataProvider providerCircumference
     */
    public function testGetCircumference($radius, $expected)
    {
        $circle = new Circle($radius);
        $circumference = $circle->getCircumference();
        $this->assertSame($expected, $circumference);
    }

    public function providerCircumference()
    {
        return array(
            array(10, 62.831853071796),
            array(15, 94.247779607694),
            array(5, 31.415926535898)
        );
    }
}

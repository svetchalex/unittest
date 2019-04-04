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

    public function testGetArea()
    {
        $circle = new Circle(10);
        $area = $circle->getArea();
        $this->assertSame(314.15926535898, $area);
    }

    public function testGetCircumference()
    {
        $circle = new Circle(10);
        $circumference = $circle->getCircumference();
        $this->assertSame(62.831853071796, $circumference);
    }

}

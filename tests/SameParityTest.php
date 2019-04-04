<?php
require_once __DIR__ . '/../SameParity.php';

use PHPUnit\Framework\TestCase;


class SameParityTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testFindIndex($numbers, $expected)
    {
        $sameparity = new SameParity();
        $result = $sameparity->getSameParity($numbers);
        $this->assertSame($expected, $result);
    }

    public function provider()
    {
        return array(
            array([], []),
            array([1, 2, 3], [1, 3]),
            array([1, 2, 8], [1]),
            array([2, 2, 8], [2, 2, 8])
        );
    }
}


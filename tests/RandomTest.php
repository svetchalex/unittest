<?php
require_once __DIR__ . '/../Random.php';

use PHPUnit\Framework\TestCase;

class RandomTest extends TestCase
{

    public function testGetNext()
    {
        $seq = new Random(100);
        $result = [];
        for ($i = 0; $i < 8; $i++) {
            $result[$i] = $seq->getNext();
        }
        $expected = [7, 6, 9, 0, 7, 6, 9, 0];
        $this->assertEquals($expected, $result);
    }

    public function testReset()
    {
        $seq = new Random(100);
        $seq->reset();
        $result = $seq->getNext();
        $this->assertEquals(7, $result);
    }
}

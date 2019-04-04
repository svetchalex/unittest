<?php
require_once __DIR__ . '/../Prefix.php';

use PHPUnit\Framework\TestCase;

class PrefixTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testAddPrefix($names, $pref, $expected)
    {
        $prefix = new Prefix();
        $result = $prefix->addPrefix($names, $pref);

        $this->assertSame($expected, $result);
    }

    public function provider()
    {
        return array(
            array(['Bell', 'Lynch', 'Norris'], 'Mr.', ['Mr. Bell', 'Mr. Lynch', 'Mr. Norris']),
            array(['Bell', 'Lynch', 'Norris'], 'Ms.', ['Ms. Bell', 'Ms. Lynch', 'Ms. Norris']),
            array(['Dickerson ', 'Riley'], 'Mrs.', ['Mrs. Dickerson ', 'Mrs. Riley'])
        );
    }

}

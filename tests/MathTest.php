<?php
//require_once 'CsvFileIterator.php';
require_once(__DIR__ . '/../src/inc/Math.inc');

class MathTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $math = new Math();

        // Integer
        $this->assertEquals(44, $math->add(42, 2));
        $this->assertEquals(0, $math->add(0, 0));
        $this->assertEquals(-44, $math->add(-42, -2));
        $this->assertEquals(-40, $math->add(-42, 2));

        // Float
        $this->assertEquals(44.0, $math->add(42, 2.0));
        $this->assertEquals(0.0, $math->add(0, 0.0));
        $this->assertEquals(-44.0, $math->add(-42, -2.0));
        $this->assertEquals(-40.0, $math->add(-42, 2.0));

        // Exception
        $this->assertFalse($math->add('foo', TRUE));
    }

    /**
     * @depends testAdd
     */
    public function testOmni()
    {
        $math = new Math();
        $this->assertEquals(-20, $math->add(1.0, $math->divide(42, -2.0)));
    }

    /**
     * @dataProvider additionProvider
     */
//    public function testAdd_v1($a, $b, $expected)
//    {
//        $math = new Math();
//        $this->assertEquals($expected, $math($a + $b));
//    }
//
//    public function additionProvider()
//    {
//        return new CsvFileIterator('AddData.csv');
//    }
}

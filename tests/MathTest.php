<?php
//require_once 'CsvFileIterator.php';
require_once __DIR__ . '/../src/inc/Math.inc';

class MathTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($expected, $num1, $num2)
    {
        $math = new CI_Demo\Math();

        $this->assertEquals($expected, $math->add($num1, $num2));
    }

    public function additionProvider()
    {
        return array(
            // Integer
            array(44, 42, 2),
            array(0, 0, 0),
            array(-44, -42, -2),
            array(-40, -42, 2),
            // Float
            array(44.0, 42, 2.0),
            array(0.0, 0, 0.0),
            array(-44.0, -42, -2.0),
            array(-40.0, -42, 2.0),
            // Exception
            array(FALSE, 'foo', TRUE),
        );
    }

    /**
     * @dataProvider divisionProvider
     */
    public function testDivide($expected, $num1, $num2)
    {
        $math = new CI_Demo\Math();

        $this->assertEquals($expected, $math->divide($num1, $num2));
    }

    public function divisionProvider()
    {
        return array(
            // Integer
            array(21, 42, 2),
            array(FALSE, 0, 0),
            array(21, -42, -2),
            array(-21, -42, 2),
            // Float
            array(21.0, 42, 2.0),
            array(FALSE, 0, 0.0),
            array(21.0, -42, -2.0),
            array(-21.0, -42, 2.0),

            // Exception
            // TODO: comment this out to demo insufficient coverage
            //array(FALSE, 'foo', TRUE),
        );
    }

    /**
     * @depends testAdd
     * @depends testDivide
     */
    public function testOmni()
    {
        $math = new CI_Demo\Math();

        // TODO: Use this line to demo failed assertion
        $this->assertEquals(43, $math->divide($math->add(42, 42), 2));
        //$this->assertEquals(42, $math->divide($math->add(42, 42), 2));
    }
}

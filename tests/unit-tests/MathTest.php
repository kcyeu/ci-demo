<?php
namespace CI_Demo;

require_once __DIR__ . '/../../src/inc/Math.inc.php';

class MathTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($expected, $num1, $num2)
    {
        $math = new Math();

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
/*
            array(44.0, 42, 2.0),
            array(0.0, 0, 0.0),
            array(-44.0, -42, -2.0),
            array(-40.0, -42, 2.0),
*/
            // Exception
            array(false, 'foo', true),
        );
    }

    /**
     * @dataProvider subtractionProvider
     */
    public function testSub($expected, $num1, $num2)
    {
        $math = new Math();

        $this->assertEquals($expected, $math->sub($num1, $num2));
    }

    public function subtractionProvider()
    {
        return array(
            // Integer
            array(40, 42, 2),
            array(0, 0, 0),
            array(-40, -42, -2),
            array(-44, -42, 2),
            // Float
            array(40.0, 42, 2.0),
            array(0.0, 0, 0.0),
            array(-40.0, -42, -2.0),
            array(-44.0, -42, 2.0),
            // Exception
            array(false, 'foo', true),
        );
    }

    /**
     * @dataProvider divisionProvider
     */
/*
    public function testDivide($expected, $num1, $num2)
    {
        $math = new Math();

        $this->assertEquals($expected, $math->divide($num1, $num2));
    }
*/
    public function divisionProvider()
    {
        return array(
            // Integer
            array(21, 42, 2),
            array(false, 0, 0),
            array(21, -42, -2),
            array(-21, -42, 2),
            // Float
            array(21.0, 42, 2.0),
            array(false, 0, 0.0),
            array(21.0, -42, -2.0),
            array(-21.0, -42, 2.0),

            // Exception
            array(false, 'foo', true),
        );
    }

    /**
     * @depends testAdd
     * @depends testSub
     * @depends testDivide
     */
    public function testOmni()
    {
        $math = new Math();

        $this->assertEquals(42, $math->divide($math->add(42, 42), 2));
    }
}

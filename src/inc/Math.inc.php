<?php
/**
 * Math
 *
 * PHP version 5
 *
 * @file Math.inc
 * @category PHP
 * @package  CI_Demo
 * @author   Kuo-Cheng Yeu <kmd@mikuru.tw>
 * @license  GPL 2.0
 * @link     https://github.com/kcyeu/ci-demo
 */
namespace CI_Demo;

class Math
{
    public function __construct()
    {
    }

    /**
     * Add
     *
     * @param numberic $num1 1st number
     * @param numberic $num2 2nd number
     *
     * @return numberic sum of $num1 and $num2, FALSE for exception
     * @example add(1, 41)
     *
     *
     */
    public function add($num1, $num2)
    {
        if (is_numeric($num1) && is_numeric($num2)) {
             return ($num1 + $num2);
        }
        return false;
    }

    /**
     * Sub
     *
     * @param numberic $num1 1st number
     * @param numberic $num2 2nd number
     *
     * @return numberic sum of $num1 and $num2, FALSE for exception
     *
     */
    public function sub($num1, $num2)
    {
        if (is_numeric($num1) && is_numeric($num2)) {
             return ($num1 - $num2);
        }
        return false;
    }

    /**
     * Divide
     *
     * @param numberic $num1 1st number
     * @param numberic $num2 2nd number
     *
     * @return numberic quotient of $num1 and $num2, FALSE for exception
     *
     */
    public function divide($num1, $num2)
    {
        if ($num2 == 0) {
            return false;
        }

        if (is_numeric($num1) && is_numeric($num2)) {
            return ($num1 / $num2);
        }
        return false;
    }
}

<?php
/**
 * Math
 *
 * PHP version 5
 *
 * @file Math.php
 * @category PHP
 * @package  CI_Demo
 * @author   Kuo-Cheng Yeu <kmd@mikuru.tw>
 * @license  GPL 2.0
 * @link     https://github.com/kcyeu/ci-demo
 */
namespace CI_Demo;

require_once __DIR__ . '/inc/Math.inc';

$math = new Math();
$num1 = 42;
$num2 = 2.0;

echo "$num1 + $num2 = " . $math->add($num1, $num2) . "\n";
echo "$num1 / $num2 = " . $math->divide($num1, $num2) . "\n";

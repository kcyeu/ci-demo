<?php
require_once('./inc/Math.inc');

$math = new Math();
$num1 = 42;
$num2 = 2.0;

echo "$num1 + $num2 = " . $math->add($num1, $num2) . "\n";
echo "$num1 / $num2 = " . $math->divide($num1, $num2) . "\n";

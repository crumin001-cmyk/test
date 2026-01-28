<?php
// function outputNumber($a)
// {
//   echo "引数の値は" . $a . "です";
//   return;
// }

// outputNumber(2);
?>
<?php
// function outputHello()
// {
//   echo "Hello world";
// }

// outputHello(); // ①
?>
<?php
function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(1, 5);
echo $total;
echo "<br/>";
?>
<?php

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);


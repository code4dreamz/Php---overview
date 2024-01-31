<?php

/*Operators in php
1. Arithmetic
2. Assignment
3. Comparison
4. Logical
5. increment , decrement
*/

//1. Arithmetic
$a = 65;
$b = 49;

echo "For a + b , the result is " . ($a - $b) . "<br>";
echo "For a - b , the result is " . ($a - $b) . "<br>";
echo "For a * b , the result is " . ($a * $b) . "<br>";
echo "For a / b , the result is " . ($a / $b) . "<br>";
// echo "For a % b , the result is " . ($a  $b) . "<br>";
echo "For a ** b , the result is " . ($a ** $b) . "<br>";
echo var_dump($a -$b);
echo "<br>";

//2. Assignment
$x = $a;
echo "For x, the value is " . $x . "<br>";
$a +=6;
echo "For a , the value becomes " . $a . "<br>";
$b -=6;
echo "For b , the value becomes " . $b . "<br>";

//3. Comparison

$t = 2;
$g = 4;
echo "For t < g , the result is " . ($t < $g) . "<br>";
echo "For t > g , the result is " . var_dump($t > $g) . "<br>";

echo var_dump(9==10);


//4. Logical

$m = true;
$z = true;
echo "For m and z , the result is " . ($m && $z) . "<br>";

$_3 = true;
$_4 = false;
echo "For _3 and _4 , the result is " . ($_3 || $_4) . "<br>";

$_8 = false;
echo " For _8 , the value gets inverted" . ( !$_8) . "<br>";

$var1 = (true xor true); // for same the output is false
$var2 = (true xor false); // for opposite-different the output will be true
echo var_dump($var1);
echo "<br>";
echo var_dump($var2);
echo "<br>";

//5. increment, decrement

$var = 10;
echo ++$var; //preincrement






?>

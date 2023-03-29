<?php

$name = "Hudson Rocha";
$number1 = 10;
$number2 = 3;
$number3 = "3";

echo "Hello World!";
echo "<br>";

echo $name;
echo "<br>";

$result = $number1 + $number2;
echo $result;
echo "<br>";
echo gettype($result);
echo "<br>";

$result = $number1 - $number2;
echo $result;
echo "<br>";
echo gettype($result);
echo "<br>";

$result = $number1 * $number2;
echo $result;
echo "<br>";
echo gettype($result);
echo "<br>";

$result = $number1 / $number2;
echo $result;
echo "<br>";
echo gettype($result);
echo "<br>";

$result = $number1 % $number2;
echo $result;
echo "<br>";
echo gettype($result);
echo "<br>";

$result = $number3+$number2;
echo "O resultado da soma de uma string com inteiro é um " .gettype($result);
echo "<br>";

if(is_int($number3))
{
    echo '$number3 é um inteiro';
}
else
{
    echo '$number3 não é uma string';
}

?>
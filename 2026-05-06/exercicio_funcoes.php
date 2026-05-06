<?php


function soma($val1, $val2)
{
    return $val1 + $val2;
}

function subtrair($val1, $val2)
{
    return $val1 - $val2;
}

function mult($val1, $val2)
{
    return $val1 * $val2;
}

function divide($val1, $val2)
{
    return $val1 / $val2;
}




$x = 10;
$y = 20;
echo "Soma é " . soma($x, $y); 
echo "<br>", "<br>";
$x = 10;
$y = 20;
echo "Subtração é " . subtrair($x, $y);
echo "<br>", "<br>";
$x = 10;
$y = 20;
echo "Multiplicação é " . mult($x, $y);
echo "<br>", "<br>";
$x = 10;
$y = 20;
echo "Divisão é " . divide($x, $y);

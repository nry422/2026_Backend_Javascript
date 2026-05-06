<?php

function imprime()
{
    echo "A função imprime foi chamada!";
}

// passagem de parâmetros por valor
function soma($val1, $val2)
{
    return $val1 + $val2;
}

imprime();

echo "<br>", "<br>";

$x = 10;
$y = 20;
echo soma($x, $y); // imprime 30


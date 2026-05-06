<?php
$matriz = array(
    "paises" => array(
        1 => "Brasil",
        2 => "Estados Unidos"
    ),
    "estados" => array(
        1 => "São Paulo",
        2 => "Santa Catarina",
        3 => "Flórida",
        "PR" => "Paraná"
    )
);
echo $matriz["paises"][1] . "<br>";
echo $matriz["estados"][1] . "<br>";
echo $matriz["paises"][2] . "<br>";
echo $matriz["estados"][3] . "<br>";
echo $matriz["estados"]["PR"] . "<br>";
$matriz["estados"][] = "Rio Grande do Sul"; //adicionando sem especifica indice ele volta a seguir a ordem numerica,
var_dump($matriz);
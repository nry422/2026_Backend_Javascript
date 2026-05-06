<?php
$carros = array(
"Fusca",
"Ka",
"Ferrari",
"Porsche"
);
print_r($carros);
asort($carros); //organiza por ordem alfabetica (ou crescente), mantem o indice
echo "<br>";
print_r($carros);
ksort($carros); //organize em ordem pela chave
echo "<br>";
print_r($carros);
<?php
//simulando um contador, tecle f5 para atualziar o navegador
$contador = 0;

if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'];
    echo "Valor: " . $contador;
    $contador++;
    setcookie("contador", $contador, 0);    
} else {
    echo "Valor: " . $contador;
    $contador++;
    setcookie("contador", $contador, 0);
}
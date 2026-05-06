<?php
$idade = 51;
if ($idade < 18) {
    echo "Você ainda é jovem!";
} elseif ($idade < 30) {
    echo "Você é adulto";
} elseif ($idade < 40) {
    echo "Você é mais experiente!";
} elseif ($idade < 50) {
    echo "Você está na meia idade!";
} else {
    echo "Você é mais sênior!";
}

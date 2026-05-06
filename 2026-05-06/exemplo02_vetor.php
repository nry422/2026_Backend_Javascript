<?php
$nomes = array(
'Fulano',
'Beltrano',
'Ciclano'
);
$tamanho_vetor = count($nomes);
echo "Tamanho do vetor: " . $tamanho_vetor . "<br>";
print_r($nomes);

$nomes = [ 
'Fulano',
'Beltrano',
'Ciclano',
'Outros'
];

$nomes[] = "Xico";
echo "<br><br>";

$tamanho_vetor = count($nomes);
echo "Tamanho do vetor: " . $tamanho_vetor . "<br>";
print_r($nomes);

echo "<br><br>";

// não foi passado no slide, mas imprime sem o indice, requer um loop
foreach ($nomes as $nome) {
    echo $nome . "<br>";
}

echo "<br><br>";
var_dump($nomes);
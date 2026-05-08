<?php
$a[] = "Ana";
$a[] = "Beltrano";
$a[] = "Ciclano";
$a[] = "Daniela";
$a[] = "Eva";
$a[] = "Fulano";
$a[] = "Gabriel";
$a[] = "Hildergarda";
$a[] = "Indiana";
$a[] = "Joana";
$a[] = "Kelly";
$a[] = "Lucimaria";
$a[] = "Nunes";
$a[] = "Otavio";
$a[] = "Patricia";
$a[] = "Amelia";
$a[] = "Rafael";
$a[] = "Cintia";
$a[] = "Doris";
$a[] = "Evaldo";
$a[] = "Evita";
$a[] = "Simone";
$a[] = "Titiane";
$a[] = "Ugo";
$a[] = "Vitoria";
$a[] = "Liza";
$a[] = "Erico";
$a[] = "Elenice";
$a[] = "Washington";
$a[] = "Vitoria";

$q = $_GET["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "Sem sugestão" : $hint;
?>

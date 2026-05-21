<?php
session_start();
$_SESSION['nome'] = "Henry";
$_SESSION['cidade'] = "Jaraguá do Sul";
echo "Olá " . $_SESSION['nome'] . " você vive na cidade de " . $_SESSION['cidade'];
<?php
$arquivo = fopen('texto.txt', 'r');
$arquivo = @fopen('texto.txt', 'r');
$arquivo = fopen('texto.txt', 'r') or die('Não foi possível abrir o arquivo
para leitura!');
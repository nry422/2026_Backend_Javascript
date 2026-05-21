<?php
session_start();
//a funcao unset retira a referencia da variavel email
$_SESSION['email'] = "teste@teste.com.br";
echo $_SESSION['email'] . "<br>";
// nao faca unset ($_SESSION) pois todas as variaveis da sessao vao ser removidas!
unset($_SESSION['email']);
if (!isset($_SESSION['email'])) {
    echo "email não existe mais na sessão!";
}
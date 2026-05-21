<?php
session_start();
if (isset($_SESSION['email'])) {
    echo "A variavel e-mail existe na sessão!";
} elseif (isset($_SESSION['cidade'])) {
    echo "A variável cidade existe na sessão!";
} else {
    echo "A variável cidade e email não existem na sessão!";
}
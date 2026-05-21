<?php
session_start();
$_SESSION['usuario'] = "fulano";
print_r($_SESSION);
$_SESSION = array();
session_destroy();
print_r($_SESSION);
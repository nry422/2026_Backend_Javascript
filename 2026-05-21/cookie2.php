<?php
//especifica um caminho válido para o cookie; que será visível somente em /livro/admin
setcookie("livro", "php profissional", 0, "/livro/admin");

//especifica um sub-dominio valido para sua utilizacao durante 5 horas
setcookie("site", "particular", time() + 3600 * 5, "./", "www.meusite.com.br");

print_r($_COOKIE);
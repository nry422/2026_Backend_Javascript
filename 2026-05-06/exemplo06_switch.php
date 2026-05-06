<?php
$estado = "SC";
switch ($estado) {
case "SC":
echo "Estado da região sul";
break;
case "ES":
echo "Estado da região sudeste";
break;
default:
echo "Não foi possível identificar a região do estado!";
break;
}

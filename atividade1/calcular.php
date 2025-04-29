<?php
function multiplicar($a, $b) {
    return ($a * $b) ;
}

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$m = multiplicar($valor1, $valor2);

echo "O produto de $valor1 e $valor2 é: $m";
?>
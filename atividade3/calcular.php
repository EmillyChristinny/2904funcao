<?php
function maiorNumero($a, $b, $c) {
    return max($a, $b, $c);
}
 
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
 
$maior = maiorNumero($num1, $num2, $num3);
 
echo "O maior número entre $num1, $num2 e $num3 é: $maior";
?>
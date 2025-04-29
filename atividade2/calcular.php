<?php
function parOuImpar($a) {
return $a%2;
}
$valor = $_POST['valor'];
$calculo = parOuImpar ($valor);
if ($calculo == 0)
{
   echo " $a e impar";
}
else 
{
echo " $a e par";
}

?>
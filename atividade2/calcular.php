
<?php

$valor1 = $_POST['valor1'];
function parOuImpar($a) {
$sobra = ($a %2);
}
if ($sobra == 1)
{
   echo " $a e impar";
}
else 
{
echo " $a e par";
}
$sobra = parOuImpar($valor1)

?>
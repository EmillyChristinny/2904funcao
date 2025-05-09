<?php
function validarIdade($idade) {
    if ($idade < 18) {
        return "Menor de idade";
    } elseif ($idade < 60) {
        return "Adulto";
    } else {
        return "Idoso";
    }
}
 
$idade = $_POST['idade'];
$classe = validarIdade($idade);
 
echo "Com $idade anos, a pessoa é: $classe";
?>
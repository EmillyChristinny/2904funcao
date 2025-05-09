<?php
function v($idade) {
    if ($idade < 18) {
        return "Menor de idade";
    } elseif ($idade < 60) {
        return "Adulto";
    } else {
        return "Idoso";
    }
}
 
$idade = $_POST['idade'];
$classe = v($idade);
 
echo "Com $idade anos, a pessoa é: $classe";
?>
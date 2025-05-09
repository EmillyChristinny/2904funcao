<?php
function converterParaCelsius($f) {
    return ($f - 32) * 5 / 9;
}
 
$fahrenheit = $_POST['fahrenheit'];
$celsius = converterParaCelsius($fahrenheit);
 
echo "$fahrenheit ºF equivale a $celsius ºC";
?>
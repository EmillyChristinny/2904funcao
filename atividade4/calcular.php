<?php
function converter($f) {
    return ($f - 32) * 5 / 9;
}
 
$fahrenheit = $_POST['fahrenheit'];
$celsius = converter($fahrenheit);
 
echo "$fahrenheit ºF equivale a " . round($celsius, 2) . " ºC";
?>
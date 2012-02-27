<?php
/*
$string = "first.last@domain.co.uk";
if (preg_match('/^[a-zA-Z_][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $string)) {
    echo "Email válido.";
}
*/

$string = "#aBc";
if (preg_match('/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/', $string)) {
    echo "achei uma cor hexadecimal.";
}
$string = "#666666";
if (preg_match('/^#(?:(?:[a-f\d]{3}){1,2})$/i', $string)) {
echo "achei uma cor hexadecimal.";
}
<?php
$palidromo = $_POST['palidromo'];
function strPalidromo($str)
{
    if (strrev($str) == $str) {
        return 1;
    } else {
        return 0;
    }
}
$original = $palidromo;
if (empty($original)) {
    echo "Nenhum texto digitado";
}
else if (strPalidromo($original)) {
    echo "O texto é um palindrome";
} else {
    echo "O texto não é palindrome";
}

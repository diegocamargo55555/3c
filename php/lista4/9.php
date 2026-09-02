<?php

function palindromo(string $a) : string {
    $inv = "";
    for ($i=strlen($a)-1; $i >=0; $i--) { 
        $inv .= $a[$i];
    }
    if ($a == $inv) {
        return "$a é um palindromo\n";
    }else {
        return "$a nao é um palindromo\n";
    }
}

echo palindromo("arara");
echo palindromo("laravel");
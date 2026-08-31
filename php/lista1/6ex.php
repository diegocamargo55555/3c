<?php

$x = "10";
$y = 10;

if ($x == $y) { #true pois compara apenas o conteudo da variavel e nao o tipo
    echo "true";
}else {
    echo "false";
}
if ($x === $y) {  #falso pois um 10 é int e outro 10 é string
    echo "\ntrue";
}else {
    echo "\nfalse";
}
if ($x != $y) {   # falso pois o conteudo da variavel é o mesmo
    echo "\ntrue";
}else {
    echo "\nfalse";
}
if ($x !== $y) { # true pois o tipo das variaveis são diferentes
    echo "\ntrue";
}else {
    echo "\nfalse";
}

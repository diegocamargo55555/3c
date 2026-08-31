<?php

$x = 42;
$y = "Ola";
$z = true;

echo "\na variavel $x é do tipo: ", (gettype($x))  ;
echo "\na variavel $y é do tipo: ", (gettype($y));
echo "\na variavel $z é do tipo: ", (gettype($z));

if (gettype($x) == "integer") {
    echo "\na variavel $x é do tipo integer";
}elseif(gettype($x) == "string"){
    echo "\na variavel $x é do tipo string";
}else{
    echo "\na variavel $x é do tipo boolean";
}

if (gettype($y) == "integer") {
    echo "\na variavel $y é do tipo integer";
}elseif(gettype($y) == "string"){
    echo "\na variavel $y é do tipo string";
}else{
    echo "\na variavel $y é do tipo boolean";
}

if (gettype($z) == "integer") {
    echo "\na variavel $z é do tipo integer";
}elseif(gettype($z) == "string"){
    echo "\na variavel $z é do tipo string";
}else{
    echo "\na variavel $z é do tipo boolean";
}
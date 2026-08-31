<?php

$peso = 75;
$altura = 1.80;

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "abaixo do peso";
}elseif(18.5 < $imc && $imc <= 24.9){
    echo "peso normal";
}elseif(24.9 < $imc && $imc < 30){
    echo "sobre peso";    
}else {
    echo "obsedidade";
}


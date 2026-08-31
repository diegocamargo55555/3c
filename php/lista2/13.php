<?php

$lado1 = 5;
$lado2 = 5;
$lado3 = 8;

if ($lado1 < $lado2+$lado3 && $lado2 < $lado1+$lado3 && $lado3 < $lado2+$lado1) {
    if ($lado1 == $lado2 && $lado1 == $lado3) {
        echo "o triangulo é um equilatero";
    }elseif ($lado1 == $lado2 || $lado1 == $lado3) {
        echo "o triangulo é um isosceles";
    }else {
        echo "o triangulo é um escaleno";
    }
}else {
    echo "não é um triangulo";
}


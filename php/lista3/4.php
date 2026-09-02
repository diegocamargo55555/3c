<?php

$valores = [34, 12, 89, 3, 56, 71, 23];

$min = PHP_INT_MAX;
$max = -PHP_INT_MAX;

foreach ($valores as $valor) {
    if ($min > $valor) {
        $min = $valor;
    }
    if ($max < $valor) {
        $max = $valor;
    }
}

echo "max: $max \nmin: $min";
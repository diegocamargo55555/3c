<?php

$peso = floatval(readline("digite seu peso: "));
$altura = floatval(readline("digite sua altura: "));

$imc = $peso / ($altura * $altura);

echo "imc: ", number_format($imc, 2);


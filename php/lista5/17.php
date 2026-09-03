<?php

$estoque = [
    'Camiseta' => 50,
    'Calça' => 30,
    'Tênis' => 15,
    'Boné' => 80,
    'Meia' => 100
];

$nomesProdutos = array_keys($estoque);
$quantidades = array_values($estoque);

echo "a) Nomes dos produtos (chaves):\n";
print_r($nomesProdutos);

echo "\nb) Quantidades (valores):\n";
print_r($quantidades);

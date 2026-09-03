<?php

$precos = [100, 250, 80, 320, 150];

$precosComDesconto = array_map(fn($preco) => $preco * 0.9, $precos);

echo "Array original:\n";
print_r($precos);

echo "\nArray com desconto (10%):\n";
print_r($precosComDesconto);

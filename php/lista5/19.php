<?php

$itens = [
    ['nome' => 'Mouse', 'preco' => 50],
    ['nome' => 'Teclado', 'preco' => 120],
    ['nome' => 'Monitor', 'preco' => 900],
    ['nome' => 'Headset', 'preco' => 200]
];

$total = array_reduce($itens, function($acumulador, $item) {
    return $acumulador + $item['preco'];
}, 0);

echo "Valor total de todos os itens: R$ " . $total . "\n";

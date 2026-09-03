<?php

$fila = ["primeiro", "segundo", "terceiro", "quarto", "quinto"];



print_r($fila);

$nfila = count($fila);

for ($i=0; $i < $nfila/2; $i++) { 
    $temp = $fila[$i];
    $fila[$i] = $fila[$nfila - $i];
    $fila[$nfila - $i] = $temp;
}

print_r($fila);

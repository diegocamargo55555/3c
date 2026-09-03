<?php

$numero = [10, 20, 30, 40, 50];

array_pop($numero);
array_shift($numero);

array_push($cores, "amarelo");
array_unshift($cores, "preto");

foreach ($cores as $cor) {
    echo "$cor\n"; 
}

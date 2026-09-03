<?php

$cores = ["vermelho", "amarelo", "azul"];

array_push($cores, "amarelo");
array_unshift($cores, "preto");

foreach ($cores as $cor) {
    echo "$cor\n"; 
}

<?php

$frase1 = "Aprender PHP eh divertido!";

echo "total de caracteres frase1: ", strlen($frase1);

$frase2 = "Aprender PHP é divertido!";
echo "\ntotal de caracteres frase2: ", mb_strlen($frase2, 'UTF-8');;
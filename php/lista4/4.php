<?php

$frase1 = "abcdefghij";
$thres = "";
$frase2 = "";
$frase3 = "";

for ($i=0; $i < 3; $i++) { 
    $thres .= $frase1[$i];
}
for ($i=3; $i < 7; $i++) { 
    $frase2 .= $frase1[$i];
}

$frase3 .= $frase1[strlen($frase1)-1];
$frase3 .= $frase1[strlen($frase1)-2];

echo "a) ". $thres;
echo "\na) ". $frase2;
echo "\na) ". $frase3;

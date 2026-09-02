<?php

$original = "php é legal";
$invertida = "";
for ($i=0; $i <= strlen($original); $i++) { 
    $invertida .= $original[strlen($original)-$i];
    #echo $invertida[10];
}
echo "\n$invertida";
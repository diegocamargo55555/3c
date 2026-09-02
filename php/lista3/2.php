<?php

$fibo = [0,1]; 

for ($i=1; $i < 15 ; $i++) { 
    $fibo[] = $fibo[$i-1] +$fibo[$i]; 
}

for ($i=0; $i < 15; $i++) { 
    echo "$fibo[$i]\n";
}
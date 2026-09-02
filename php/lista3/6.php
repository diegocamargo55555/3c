<?php

$primo = true;

for ($i=2; $i <= 50; $i++) { 
    for ($j=1; $j <= 25 ; $j++) { 
        if ($i % $j == 0 && $j != 1) {
            #echo "i: $i";
            $primo = false;
            break;
        }else {
            $primo = true;
        }
    }
    if ($primo) {
        echo "primo: $i\n";
    }

}
<?php

$str = 42;
$string = strval($str); 

$string2 = strval($str);
for ($i=0; 10 > strlen($string2) ; $i++) { 
    $string2 = "0".$string2;
}

for ($i=0; 10 > strlen($string) ; $i++) { 
    $string .= ".";
}


echo $string2;
echo "\n$string\n";


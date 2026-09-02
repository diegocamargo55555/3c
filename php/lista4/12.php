<?php

$str = ["HTML", "CSS", "JavaScript", "PHP"];
$string = "";

for ($i=0; $i < count($str) ; $i++) { 
    $string .= $str[$i] ."|";
}

echo $string;


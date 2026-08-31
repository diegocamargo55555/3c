<?php

$numero = 15;

if ($numero%3 == 0 && $numero%5 == 00) {
    echo "FizzBuzz";
}elseif ($numero%3 == 0) {
    echo "Fizz";
}elseif ($numero%5 == 0) {
    echo "Buzz";
}else {
    echo "$numero";
}


<?php

$celsius = 55;

$f = $celsius * 9/5 + 32;
$k = $celsius + 273.15;

echo "temperatura em: \ncelsius: ", number_format($celsius, 2), "\nfahrenheit: ", number_format($f, 2), "\nKelvin: ",number_format($k, 2);

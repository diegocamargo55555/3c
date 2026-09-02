<?php

$variables = ["fiat uno", 3.14, "pi", "true", false, 67];

foreach ($variables as $var) {
    echo "\n---------\n$var is int? ", (is_int($var) ? "sim" : "não");
    echo "\n$var is float? ", (is_float($var) ? "sim" : "não");
    echo "\n$var is string? ", (is_string($var) ? "sim" : "não");
    echo "\n$var is bool? ", (is_bool($var) ? "sim" : "não");
    echo "\n$var is null? ", (is_null($var) ? "sim" : "não");
    echo "\n$var is numeric? ", (is_numeric($var) ? "sim" : "não");
}



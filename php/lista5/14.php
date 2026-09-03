<?php

$array = [12, 18, 25, 15, 30, 17, 21, 16];

$array = array_filter($array, fn($array) => $array >= 18 );

print_r($array);
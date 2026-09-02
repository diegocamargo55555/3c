<?php

$notas = [8.5, 6.0, 9.2, 7.8, 5.5];
$sum = 0;
foreach ($notas as $nota) {
    $sum += $nota;
}

$media = $sum / count($notas);

echo "media:", number_format($media, 2);


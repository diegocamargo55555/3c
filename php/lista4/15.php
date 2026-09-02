<?php

$str = "arquivo_relatorio.pdf";

if (str_ends_with($str, ".pdf")) {
    echo "termina em pdf";
}

if (str_starts_with($str, "arquivo")) {
    echo "\ncomeça em pdf";
}
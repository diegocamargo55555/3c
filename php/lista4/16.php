<?php

$str = "O PHP é uma linguagem de programação server-side";

if (str_contains($str, "server-side")) {
    echo "Comtem server-side\n";
}else {
    echo "nao Comtem server-side\n";

}

if (str_contains($str, "client-side")) {
    echo "Comtem client-side";
}else {
    echo "nao Comtem client-side";

}
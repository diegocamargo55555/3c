<?php

$str = "PHP é uma linguagem popular para desenvolvimento web";

$n_palavras = str_word_count($str);
echo "palavras:", $n_palavras;

$palavras = explode(' ' , str);

print_r($palavras);

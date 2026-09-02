<?php

$str = "PHP é uma linguagem popular para desenvolvimento web";

$n_palavras = str_word_count($str);
echo "palavras:", $n_palavras;

$array = preg_split('/\s+/' , $str);

echo "\n "
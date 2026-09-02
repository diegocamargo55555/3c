<?php

$array = [
    "Aluno1" =>[
    "nome" => "Lucas",
    "idade" => 26],
    
    "Aluno2" =>[
    "nome" => "Gabi",
    "idade" => 23],
    
    "Aluno3" =>[
    "nome" => "rafaell",
    "idade" => 219],
    
    "Aluno4" =>[
    "nome" => "Luana",
    "idade" => 17]
];

foreach ($array as $key => $value) {
    print_r($value);
}

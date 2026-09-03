<?php

$turma = [
    [
        "nome" => "Ana",
        "nota1" => 8.5,
        "nota2" => 7.0,
        "nota3" => 9.0
    ],
    [
        "nome" => "Bruno",
        "nota1" => 5.0,
        "nota2" => 6.5,
        "nota3" => 6.0
    ],
    [
        "nome" => "Carlos",
        "nota1" => 7.0,
        "nota2" => 7.5,
        "nota3" => 8.0
    ],
    [
        "nome" => "Daniela",
        "nota1" => 4.0,
        "nota2" => 5.0,
        "nota3" => 4.5
    ]
];

foreach ($turma as $aluno) {
    $media = ($aluno["nota1"] + $aluno["nota2"] + $aluno["nota3"]) / 3;
    $situacao = $media >= 7 ? "Aprovado" : "Reprovado";
    $mediaFormatada = number_format($media, 2);

    echo "Aluno: {$aluno['nome']} | Média: {$mediaFormatada} | Situação: {$situacao}\n";
}

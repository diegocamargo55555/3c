<?php

$nota1 = 1; 
$nota2 = 7;
$nota3 = 6.5;

$media = ($nota1 + $nota2 + $nota3)/3;

echo "o aluno teve media de $media, ele foi ", ($media >= 7) ? "aprovado" : (($media >= 5) ? "recuperação" : "reprovado");
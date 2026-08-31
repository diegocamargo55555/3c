<?php


$nome = $nomedeusuario ?? "visitante"; # nome receberá o valor de $nomedeusuario se ele existir se nao receberá "visitante" 
# por conta disso não tem problema $nomedeusuario não existir

$tema = $temaEscolido ?? $temaPadrao; 
# a variavel sequente do operador ?? tem que existir 
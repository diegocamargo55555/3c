<?php 

$valorTotal = 1899.00;
$num_parcelas = 6;

$parcela = $valorTotal/$num_parcelas;
$parcelaFloor = floor($valorTotal/$num_parcelas);
$parcelaCeil = ceil($valorTotal/$num_parcelas);
$parcelaRound = round($valorTotal/$num_parcelas);

echo "\nsem arredondamento: ", $parcela, " dif: ", $valorTotal - $parcela * $num_parcelas;
echo "\narredondamento floor: ", $parcelaFloor, " dif: ", $valorTotal - $parcelaFloor * $num_parcelas; ;
echo "\narredondamento ceil: ", $parcelaCeil, " dif: ", $valorTotal - $parcelaCeil * $num_parcelas; ;
echo "\narredondamento round: ", $parcelaRound, " dif: ", $valorTotal - $parcelaRound * $num_parcelas; ; 

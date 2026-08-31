<?php

$precoOriginal = 250.00;
$disconto = 15;

$precoDescontado = $precoOriginal * (100 - $disconto) / 100 ;

if ($precoDescontado < 200){
    echo "Compra barata";
}else{
    echo "compra Cara";
}


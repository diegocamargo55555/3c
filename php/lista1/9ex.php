<?php

$total = 100;

$total += 50;
echo "\n",$total;

$total -= 30;
echo "\n",$total;

$total *= 2;
echo "\n",$total;

$total /= 3;
echo "\n", $total;

$total %= 7;
echo "\n",$total;

$total = strval($total);

$total .= " reais";
echo "\n",$total;



?>
<?php

$var1 = 42;
$var2 = 3.14;
$var3 = "PHP";
$var4 = true;
$var5 = null;

$variaveis = [$var1, $var2, $var3, $var4, $var5];

foreach ($variaveis as $values){
  echo "\nO valor de $values é do tipo ", gettype($values),".";
}

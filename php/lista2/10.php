<?php

$preco = 250;

if ($preco < 200) {
    echo "preço original: $preco, disconto 5%, preço final". $preco * 0.95; 
}elseif ($preco >= 200 && $preco < 500) {
    echo "preço original: $preco, disconto 10%, preço final". $preco * 0.90; 
}else {
    echo "preço original: $preco, disconto 15%, preço final". $preco * 0.85;    
}
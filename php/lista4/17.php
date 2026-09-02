<?php

$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

$embaralhada = str_shuffle($str);
echo substr($embaralhada, 0, 8); 

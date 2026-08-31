<?php

$user = "admin";
$pass = "1234";

$input_user = readline("user name");
$input_pass = readline("password");

if ($user == $input_user && $pass == $input_pass) {
    echo "acesso permitido";
}else {
    echo "acesso negado";
}

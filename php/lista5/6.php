<?php


$cidade = ["sao paulo" , "rio de janeiro" , "Curitiba" , "belo horizonte" , "Salvador"];

if (in_array("Curitiba", $cidade)) {
    echo "curitiba está no array, esta na posicao " . array_search("Curitiba", $cidade);
}else {
    echo "curitiba não está no array";
}




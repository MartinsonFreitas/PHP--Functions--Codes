<?php

    $json_string='{"id":1,"nome":"joao","email":"joao@ninguem.com","interesses":["wordpress","php"]} ';
    $obj = json_decode($json_string);
    echo $obj->nome; //imprime o nome
    echo "<br />";
    echo $obj->interesses[0]; //improme o segundo interesse = php

?>
<?php

/*

Esta função é o oposto da função implode. Nela você informa uma string e define qual separador o PHP deverá usar para dividí-la e gerar um array para cada espaço dividido. Veja o exemplo:

*/


$string = 'O PHP é bacana.';

$array = explode (' ',$string);

print_r($array);

//Resultado: Array ( [0] => O [1] => PHP [2] => é [3] => bacana. )

?>
<?php

/*

Uma mão na roda em momentos que você deseja depurar a estrutura de um determinado array ou objeto no PHP. Em meus códigos, utilizo esta função sempre acompanhada da tag pre do HTML, para assim exibir de forma mais amigável a estrutura do array ou objeto. Veja o exemplo:

*/

$array = array ('a','b','c','d');

print_r($array);

//Resultado: Array ( [0] => a [1] => b [2] => c [3] => d )

?>
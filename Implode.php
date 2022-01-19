<?php

/*

Juntar os valores de um determinado array e separá-los em uma determinada string. Utilizo muito esta função para exibir listas de nomes separados por vírgula, ou para criar cláusula IN no MySQL. Veja o exemplo:

*/


$array = array ('a','b','c','d');

print(implode(',',$array));

//Resultado: a,b,c,d

?>
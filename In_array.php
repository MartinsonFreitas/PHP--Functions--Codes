<?php

/*

Esta função é realmente útil para verificar se existe um determinado valor em um array. Veja o exemplo:

*/

$array = array ('a','b','c','d');

if (in_array('a',$array))
{
   print('O valor está no array');
}
else
{
   print('Não está no array');
}

//Resultado: O valor está no array

?>
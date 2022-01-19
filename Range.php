<?php

/*

Geralmente ao se fazer um “loop“, utiliza-se o _while _ou for. Ambas estruturas são ligeiramente “feias” ao visualizar o código. Uma boa alternativa é utilizar o foreach. Mas como fazer uma repetição, se o foreach trabalha com um array existente?

No exemplo vamos fazer um loop de 5 posições, começando do número 1.

*/
foreach (range(1,5) as $ordem)
{
     print('Ordem : '.$ordem.'<br>');
}
//Resultado
//Ordem: 1
//Ordem: 2
//Ordem: 3
//Ordem: 4
//Ordem: 5

?>
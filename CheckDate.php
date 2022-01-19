<?php

/*

Função muito útil do PHP para validar se uma determinada data está correta. Evita de inserirmos datas incorretas no banco de dados, acarretando erros de sintaxe, datas zeradas ou datas incorretas. Veja o exemplo:

*/


$dia = 13;
$mes = 13;
$ano = 2015;
if (checkdate($mes,$dia,$ano))
{
    print('Data correta');
}
else
{
    print('Data incorreta');
}
//Resultado: Data incorreta

?>
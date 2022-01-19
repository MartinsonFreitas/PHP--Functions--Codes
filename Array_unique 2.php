<?php

/*

Diversas vezes nos deparamos com um array e valores duplicados. Em uma experiência pessoal, trabalhei na criação de um sistema composto por uma divisão hierárquica entre setores. Nos relatórios, os usuários informavam diversos setores ao realizar os filtros. Quando os resultados eram filtrados no banco de dados, diversos códigos de setores vinham duplicados. Com isso, as _queries _do banco ficavam maiores e mais lentas.

Com a função _arrayunique() resolvi meu problema. Veja o exemplo:

*/


$array = array ('a','b','c','d','a');
$unique = array_unique ($array);

foreach ($unique as $letra)
{
     print('Letra: '.$letra.'<br>');
}

//Resultado
//Letra: a
//Letra: b
//Letra: c
//Letra: d

?>
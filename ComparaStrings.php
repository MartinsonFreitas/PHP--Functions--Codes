<?php

    //atribui valor a string 1
    $string1 = "Programar usando php é muito legal";
    //atribui valor a string 2
    $string2 = "Programar usando php é muito chato";
    //compara 2 strings
    similar_text($string1, $string2, $quanto);
    //$quanto mostrará quantos % as 2 strings são iguais

    //imprime os resultados
    echo "As Strings: ";
    echo "<br />";
    echo $string1;
    echo "<br />";
    echo "e<br />";
    echo $string2;
    echo "<br />";
    echo "são ".$quanto." % parecidas";

?>
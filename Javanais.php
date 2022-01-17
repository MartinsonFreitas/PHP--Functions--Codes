
<?php

$frase  = "você comeria frutas, vegetais, e fibra todos os dias.";

$vowels = array("a", "e", "i", "o", "u", "ê", "A", "E", "I", "O", "U");
$javanais = array('ava','ave','avi','avo','avu','avê','AVA','AVE','AVI','AVO','AVU');

$output  = str_replace($vowels, $javanais, $frase);

    echo $output;

// Fornece: <body text='black'>
//$bodytag = str_replace("%body%", "black", "<body text='%body%'>");

// Fornece: Hll Wrld f PHP
//$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

// Fornece: você comeria pizza, cerveja e sorvete todos os dias


/*
$saudavel = array("frutas", "vegetais", "fibra");
$saboroso   = array("pizza", "cerveja", "sorvete");

$novafrase = str_replace($saudavel, $saboroso, $frase);

// Uso do parâmetro count está disponível no PHP 5.0.0
$str = str_replace("ll", "", "good golly miss molly!", $count);
//echo $count; // 2

// Order of replacement
$str     = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
$order   = array("\r\n", "\n", "\r");
$replace = '<br />';
// Processes \r\n's first so they aren't converted twice.
$newstr = str_replace($order, $replace, $str);

// Outputs: apearpearle pear
$letters = array('a', 'p');
$fruit   = array('apple', 'pear');
$text    = 'a p';
*/

?>


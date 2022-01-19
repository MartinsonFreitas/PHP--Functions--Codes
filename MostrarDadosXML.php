<!DOCTYPE html>
<?php

$string_xml="<?xml version='1.0'?>
<users>
   <user id='398'>
      <name>Joao</name>
      <email>joao@ninguem.com</email>
   </user>
   <user id='867'>
      <name>Fulano</name>
      <email>fulano@detal.com</email>
   </user>
</users>";

//carrega a string xml usando a função
$xml =simplexml_load_string($string_xml);

//faz um look para cada ocorrência de "user"
foreach ($xml->user as $user)
{
   //acessa atributo
   echo $user['id'], '  ';
   //ocorrencias internas acessadas através do operador ->
   echo $user->name, '  ';
   echo $user->email, '<br />';
}

?>
<html>
<head>
</head>
<body>

<?php
    // imprime o resultado
    echo $xml;

?>

</body>
</html>
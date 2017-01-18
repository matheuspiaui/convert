<?php


//Essa função recebe dados de um arquivo externo JSON
//e retorna um Array Associativo em PHP

$json_file = file_get_contents("https://www.mercadobitcoin.net/api/ticker");

$v = json_decode($json_file,true);

print_r($v);

?>
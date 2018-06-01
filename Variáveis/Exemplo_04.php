<?php

$nome = (int)$_GET["a"];
//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //Pega o IP do usuário
//$ip = $_SERVER["SCRIPT_NAME"]; // Pega o caminho de onde está o arquivo
echo $ip;

?>
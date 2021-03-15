<?php
require_once("config.php");

use Cliente\cadastro;
//por meio do comando acima podemos informar o php que a classe cliente que queremos está no diretório acima
//pois temos mais de uma classe com esse nome em diretórios diferentes


$cad = new Cadastro();
$cad->setNome("Paloma");
$cad->setEmail("palomaarce@muck.com.br");
$cad->setSenha("123456");
echo $cad;
//isso funcionou por que implementamos o to string com JSON DECODE, que transforma array em JSON
$cad->registrarVenda();

?>
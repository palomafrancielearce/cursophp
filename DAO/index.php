<?php
require_once("config.php");
//arquivo com o autoload para carregar as classes necessárias

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM usuarios");

echo json_encode($usuarios);
?>
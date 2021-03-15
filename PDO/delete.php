<?php
include_once("conexao.php");
$insert = $conn->prepare("DELETE FROM usuarios WHERE idUsuario = :ID");
//a sintaxe não é mais aspas, colocamos : para o PDO entender que são parâmetros e substituí-los


$id = 0;


$insert->bindParam(":ID", $id);

$insert->execute();

echo "deletado com sucesso";
?>
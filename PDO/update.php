<?php
include_once("conexao.php");
$insert = $conn->prepare("UPDATE usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idUsuario = :ID");
//a sintaxe não é mais aspas, colocamos : para o PDO entender que são parâmetros e substituí-los

$login = "jose";
$password = "12345678";
$id = 0;
$insert->bindParam(
    //aqui passamos os valores a serem substituidos
    ":LOGIN", $login
    
);
$insert->bindParam(":PASSWORD", $password);

$insert->bindParam(":ID", $id);

$insert->execute();

echo "alterado com sucesso";
?>
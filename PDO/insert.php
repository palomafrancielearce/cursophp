<?php
include_once("conexao.php");
$insert = $conn->prepare("INSERT INTO usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");
//a sintaxe não é mais aspas, colocamos : para o PDO entender que são parâmetros e substituí-los

$login = "jose";
$password = "12345678";

$insert->bindParam(
    //aqui passamos os valores a serem substituidos
    ":LOGIN", $login
);
$insert->bindParam(":PASSWORD", $password);

$insert->execute();

echo "inserido com sucesso";
?>
<?php
$conn = new mysqli("localhost", "root", "", "curso_php");
//passando endereço onde está rodando o mysql, localhost ou o ip

if($conn->connect_error){
    //connect_error é um atributo ou método da classe mysqli 
    echo "Error: " . $conn->connect_error;
    exit;
}

$stmt = $conn->prepare("INSERT INTO usuarios (deslogin, dessenha) VALUES (?,?)");
//prepara a instrução antes de levar pro banco
//as ? serão substituidas pelos valores

$login="user";
$pass="123456";

$stmt->bind_param("ss", $login, $pass);
//aqui estamos passando o tipo das variaveis que vao substituir o ?, como são 2, passamos 2 vezes
//passamos também os valores que serão substituidos, passamos por referencia, nunca o valor direto

$stmt->execute();
//leva a instrução para o banco

//colocamos esse trecho de código para cada novo usuários que queremos inserir, vai criar vários de uma vez só
$login="root";
$pass="157849";
$stmt->execute();
//até aqui
?>
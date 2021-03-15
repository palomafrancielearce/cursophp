<?php
include_once("conexao.php");
//a sintaxe não é mais aspas, colocamos : para o PDO entender que são parâmetros e substituí-los

//abrimos a transação antes de iniciarmos a query
//a transação está amarrada na variavel utilizada para conexão e não a variavel de comando
$conn->beginTransaction();
//iniciando a transacao

$insert = $conn->prepare("DELETE FROM usuarios WHERE idUsuario = ?");
//tiramos : e colocamos ?

$id = 1;


$insert->execute(array($id));
//esse array correponde aos valores que serão substituidos pelo ? da query

//$conn->rollBack();
//utilizando esse comando, vai aparecer na tela do php que foi excluido com sucesso mas no banco não foi
//pq é um comando de cancelamento

$conn->commit();
//agora confirmando, vai aparecer a mensagem do PHP e também vai deletar do banco de dados

echo "deletado com sucesso";
?>
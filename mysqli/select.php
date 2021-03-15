<?php
$conn = new mysqli("localhost", "root", "", "curso_php");
//passando endereço onde está rodando o mysql, localhost ou o ip

if($conn->connect_error){
    //connect_error é um atributo ou método da classe mysqli 
    echo "Error: " . $conn->connect_error;
    exit;
}

$result=$conn->query("SELECT deslogin FROM usuarios");
//dessa vez não utilizamos o prepare, utilizamos direto o query
//armazenamos o retorno dentro do $result, que será um array

$data = array();

while($row=$result->fetch_array()){
    //vai exibir registro por registro
    //fetch array vai retornar se tiver dados e vai armazenar no $row
    array_push($data, $row);
    //converter em json
    var_dump($row);
}

echo json_encode($data);

?>
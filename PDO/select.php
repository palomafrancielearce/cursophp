<?php
$stmt = $conn->prepare("SELECT * FROM usuarios");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//fetch assoc serve para buscar apenas os valores e dados úteis, o restante será desconsiderado

//o fetch all vai fatiar, vai fazer tudo de uma vez
//não precisamos colocar while e passar fetch array

foreach($results as $row){
    foreach($row as $key => $value){
        echo "<strong>" . $key . ":</strong>" . $value . "<br>";
    }
    echo "========================================================= <br>";

}

var_dump($results);
?>
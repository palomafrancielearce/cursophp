<?php
$nome="Paloma";
echo $nome;
//a linha acima vai mostrar na tela o valor contido em $nome
echo "<br>";

var_dump($nome);
//essa linha acima vai mostrar o tipo da variavel, o valor e o tamanho dela

$anoNascimento = 2000;
$nomeCompleto="Paloma Franciele de Almeida Arce";

unset($nome);
//tira a variável da memória do computador

$nome = $nomeCompleto;

if(isset($nome)){
    //isset serve para verificar se uma variável está declarada, se ela existe
    echo "verificando se a variável foi declarada";
}
$nome = "Paloma";
$sobrenome="Arce";
$nomeCompleto = $nome . $sobrenome;
//utilizamos o . para concater duas variáveis

exit();
//utilizamos EXIT para parar a execução do PHP, quando não queremos que o PHP execute abaixo de deteerminado comando, 
//colocamos exit que ele irá ignorar tudo abaixo dele



?>
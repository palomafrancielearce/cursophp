<?php
function __autoload($nomeClasse){
    //é um método chamado de mágico para passarmos os arquivos que serão utilizados
    require_once("$nomeClasse.php");
}


$carro = new DelRey();
//isso o php não aceita, vai dar um erro na hora de execução pois ele não encontra essa classe
//seria necessário colocar o require_once("DelRey.php")
//mas para utilizar o autolaod não precisamos disso
$carro -> acelerar(80);
?>
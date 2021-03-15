<?php
//forma de chamar o autoload na nova versão do PHP
//ele vai buscar automaticamente todas as classes que serão necessárias utilizando a sintaxe abaixo
spl_autoload_register(function($nomeClasse){
    require_once($nomeClasse. ".php");
});

/*
function __autoload($nomeClasse){
    //é um método chamado de mágico para passarmos os arquivos que serão utilizados
    var_dump($nomeClasse);
    require_once("$nomeClasse.php");
}*/

//com o método spl_autoload_register vai funcionar o código abaixo
//IMPORTANTE: O AUTOLOAD SÓ CONSEGUE ENCONTRAR AS CLASSES NO MESMO DIRETÓRIO, BUSCA SEMPRE NO MESMO DIRETÓRIO DO ARQUIVO QUE ESTÁ
//IMPLEMENTANDO ESSA FUNÇÃO
$carro = new DelRey();
//isso o php não aceita, vai dar um erro na hora de execução pois ele não encontra essa classe
//seria necessário colocar o require_once("DelRey.php")
//mas para utilizar o autolaod não precisamos disso
$carro -> acelerar(80);
?>
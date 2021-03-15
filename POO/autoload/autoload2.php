<?php

function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse.".php") === true){
        require_once($nomeClasse . ".php");
        //verifica se o arquivo existe
    }
}


spl_autoload_register("incluirClasses");
//aqui temos 2 formas diferentes de chamar o spl autoload, criando a função fora do escopo e passando o nome como string
//ou criando a função como anonima dentro do escopo do autoload
spl_autoload_register(function($nomeClasse){
    if(file_exists("abstratas". DIRECTORY_SEPARATOR .$nomeClasse .".php")=== true){
        //DIRECTORY SEPARATOR é uma constante para criar a barra de diretório

        //abstrata é o nome da pasta onde está o arquivo que queremos buscar
        require_once("abstratas". DIRECTORY_SEPARATOR .$nomeClasse .".php");
    }
}

);

$carro = new DelRey();
$carro -> acelerar(80);

<?php

class Pessoa{
    //nomes de classes sempre com a primeira letra maiuscula
    public $nome;

    public function falar(){
        echo "O meu nome é " . $this-> nome;
        //utilizamos o this apenas dentro de métodos, fora não precisa, podemos chamar direto
    }  
}

$paloma = new Pessoa();
$paloma->nome="Paloma Arce";
//podemos chamar pq é publico
$paloma->falar();

//chamando o método
?>
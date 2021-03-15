<?php
class Pessoa{
    public $nome = "Rasmus Lerdorf";
    protected $idade = 20;
    //só quem está dentro da própria classe ou quem herda dessa classe pode utilizá-la, objeto não consegue
    private $senha = "123456";
    //aqui os herdeiros não consegue acessá-la, é um nivel acima de proteção

    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objeto = new Pessoa();
//echo $objeto->nome . "<br>";
//deu certo pois é publico
$objeto ->verDados();
//chamando esse método conseguimod ver que dentro da classe o protected é acessível e o private também



?>
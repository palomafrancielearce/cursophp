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

class Programador extends Pessoa{
    //classe que está extendendo a classe pessoa, vai extender tudo menos o que for privado
    public function verDados(){
        echo get_class($this);
        echo "<br>";
        //utilizamos essa função para mostrar de qual classe está buscando o meétodo

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }

}

$objeto = new Programador();
//echo $objeto->nome . "<br>";
//deu certo pois é publico
$objeto ->verDados();
//nao temos o método verdados no programador, apenas na pessoa, mas como está extendendo, ele consegue acessar igualmente
//primeiro o programa vai procurar na classe programador, depois vai procurar na classe herdada


?>
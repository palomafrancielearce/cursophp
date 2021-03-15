<?php

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
    
}

abstract class Automovel implements Veiculo{
    //não podemos instanciar esse classe, apenas as classes concretas que extenderem dessa
    public function acelerar($velocidade){
        echo "Veiculo acelerou até " . $velocidade;
    }

    public function frenar($velocidade){
        echo "O veiculo frenou " . $velocidade;
    }

    public function trocarMarcha($marcha)
    {
        echo "O veiculo trocou para a marcha " . $marcha;
    }
}

class DelRey extends Automovel{
    //essa sim podemos instanciar
    //diferente da interface, não somos obrigados a implementar todos os métodos da classe abstrata, não dá erro
    public function empurrar(){

    }
}

$carro = new DelRey();
$carro -> acelerar(50);

?>
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
?>
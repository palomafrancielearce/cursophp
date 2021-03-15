<?php
interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
    
}

class Civic implements Veiculo{
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

$carro = new Civic();
$carro->trocarMarcha(3);

?>
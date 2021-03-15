<?php

class Carro{
    private $modelo;
    private $motor;
    private $ano;
    //precisamos dos getters e setters

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
        //this-> modelo é o atributo da classe e $modelo é o parâmetro
    }

    public function getMotor(){
        return $this->motor;
    }

    public function setMotor($motor){
        $this->motor = $motor;
        //this-> modelo é o atributo da classe e $modelo é o parâmetro
    }
    public function getAno():int{
        //:int para definir que o retorno do método será no formato inteiro
        return $this->ano;
    }

    public function setAno($ano){
        $this->ano = $ano;
        //this-> modelo é o atributo da classe e $modelo é o parâmetro
    }

    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo("gol");
$gol->setMotor("motor");
$gol->setAno(2000);
print_r($gol->exibir());
?>
<?php

class Documento
{
    private $numero;

    public function __construct($documento)
    {
        $this->numero = $documento;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}

class Cpf extends Documento
{
    public function validar(): bool
    {

        //códigos de validação do cpf
        return true;
    }
}

$doc=  new Cpf("12345678911");
$doc -> setNumero("12345678911");
$doc ->validar();
?>

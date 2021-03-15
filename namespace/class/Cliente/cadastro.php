<?php

namespace Cliente;
//passando no namespace o nome da pasta onde está salvo o arquivo


class Cadastro extends \Cadastro{
    // \ serve para informar o php para procurar na raiz do projeto
    public function registrarVenda(){
        echo "Registrada com sucesso para o cliente " .  $this->getNome();
    }
}
?>
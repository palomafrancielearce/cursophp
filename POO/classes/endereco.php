<?php
class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;


    public function __construct($a, $b, $c){
        //método construtor para setarmos os valores de uma vez só
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){
        //método chamado quando objeto é destruido, excluído da memória
        //isso vai ocorrer quando a página chega no fim da execução ou quando utilizamos a função unset
        //quando quisermos destruir, chamamos esse método para isso
        var_dump("Chamou o método destruir");
    }

    public function __toString()
    {
        //esse método vai converter os valores todos para string, assim será possível chamá-los por dentro do echo
        return $this->logradouro . ", " . $this->numero . " - " . $this->cidade;
    }
   
}

$endereco = new Endereco("logradouro", "123", "cidade");
//var_dump($endereco);
//unset($endereco);
//vai chamar o método destruct automaticamente
echo $endereco;

?>
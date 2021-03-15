<?php
class Sql extends PDO{
    //PDO é uma classe nativa do PHP
    //esse arquivo é uma classe SQL que iremos chamar sempre que precisarmos fazer conexão com banco de dados
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=curso_php", "root", "");
        //poderiamos colocar parametros ao inves de fixo
        //colocamos os dados da conexão no construtor para ser criado logo quando chamarmos a classe

    }

     public function execQuery($rawQuery, $params=array()){
         //chamamos esse método para passar a query, a sintaxe SQL que queremos executar
         //ex: insert, update, delete
         //rawQuery será a instrução SQL e $params vai ser os parâmetros passados na clausula where
        $stmt = $this->conn->prepare($rawQuery);
        //vai preparar a instrução
        $this->setParams($stmt, $params);
        //vai setar os parametros do where na instrução
        //vai setar os parametros na outra funcao dessa classe
        $stmt->execute();
        //vai de fato executar e retornar se deu true
        return $stmt;
    }

    private function setParams($statment, $parameters = array()){
        foreach($parameters as $key=> $value){
            $this->setParams($key, $value);
        }
    }

    private function setParam($statment, $key, $value){
        $statment->bindParam($key, $value);
        //esse método é quando quisermos setar sem ser por array
    }


    public function select($rawQuery, $params = array()):array{
        $stmt = $this->execQuery($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        //método exclusivo para consultas Select
    }
   
}
?>
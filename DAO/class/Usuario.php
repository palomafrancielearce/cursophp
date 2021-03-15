<?php
class Usuario{
    private $idUsuario;
    private $deslogin;
    private $dessenha;
    private $dtCadastro;

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($id){
        $this->idUsuario = $id;
    }

    public function getLogin(){
        return $this->deslogin;
    }

    public function setLogin($login){
        $this->deslogin = $login;
    }
    public function getSenha(){
        return $this->dessenha;
    }

    public function setSenha($senha){
        $this->dessenha = $senha;
    }
    public function getDtCadastro(){
        return $this->dtCadastro;
    }

    public function setDtCadastro($dt){
        $this->dtCadastro = $dt;
    }

    public function loadById($id){
        //carregar pelo id
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM usuarios WHERE idUsuario =:ID", array(
            ":ID" => $id
        ));

        if(isset($result[0])){
            //verificar se tem pelo menos um dado
            $row = $result[0];
            $this->setIdUsuario($row['idUsuario']);
            $this->setLogin($row['deslogin']);
            $this->setSenha($row['dessenha']);
            $this->setDtCadastro(new Datetime($row['dataCadastro']));
        }
        //com o código acima, preenchemos os dados com os dados vindo do banco
        //carregamos os dados do banco para o objeto
    }

    public function __toString()
    {
        return json_encode(array(
            "idUsuario"=>$this->getIdUsuario(),
            "deslogin: " =>$this->getLogin(),
            "dessenha: " =>$this->getSenha(),
            "dtCadastro : " => $this->getDtCadastro()->format("d/m/Y H:i:s")
        ));
    }

}
?>
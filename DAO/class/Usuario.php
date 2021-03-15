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
            $this->setData($result[0]);
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

    public static function source($login){
        //buscar um usuario
        $sql = new Sql();
        $sql->select("SELECT * FROM usuarios WHERE deslogin LIKE :SEARCH", array(
            ':SEARCH'=>'%$login%'
            //isso para buscar qualquer coisa antes e qualquer coisa depois de $login
        ));
    }

    public static function getList(){
        //pode ser static pq não utilizamos $this
        $sql = new Sql();
        return $sql->select("SELECT * FROM usuarios ORDER BY deslogin;");
    }

    public function login($login, $senha){
         //carregar pelo id
         $sql = new Sql();
         $result = $sql->select("SELECT * FROM usuarios WHERE deslogin =:LOGIN AND dessenha = :PASSWORD", array(
             ":LOGIN" => $login,
             ":PASSWORD" => $senha
         ));
 
         if(isset($result[0])){
             //verificar se tem pelo menos um dado
             $row = $result[0];
             $this->setData($result[0]);
           
         } else{
             throw new Exception(
            "Login ou senha inválidos"
             );
         }
    }

    public function setData($data){
        $this->setIdUsuario($data['idUsuario']);
        $this->setLogin($data['deslogin']);
        $this->setSenha($data['dessenha']);
        $this->setDtCadastro(new Datetime($data['dataCadastro']));
    }

    public function insert(){
        $sql = new Sql();
        $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ":LOGIN " => $this->getLogin(), 
            ":PASSWORD " => $this->getSenha()
            //pegamos do objeto
            //chamando o precedure, conseguimos retornar o id
        ));
        //chamando uma procedure, um procedimento
        if(count(($sql) > 0)){
            $this->setData($sql[0]);
        }
    }

    public function __construct($login="", $senha="")
    //colocando ="" nos parametros faz com que ele não seja obrigatorio, posso chamar tanto passando parametros quando não
    //passando, se não passar, vai preencher com ""
    {
        $this->setLogin($login);
        $this->setSenha($senha);
        //assim coloando no construtor facilita a criação, diminui as linhas
    }

}
?>
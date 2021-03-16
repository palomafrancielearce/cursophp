<?php
require_once("config.php");
//arquivo com o autoload para carregar as classes necessárias
//carega um só usuario
//$root = new Usuario();
//$root->loadById(2);

//echo $root;
//vai funcionar por causa do toString

//carregando uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carregando uma lista de usuarios buscando pelo login
//$busca = Usuario::source("u");

//echo json_encode($busca);

//carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "157849");
//echo $usuario;


//inserindo usuariio
//$aluno = new Usuario("aluno", "password");
//$aluno->setLogin("aluno");
//$aluno->setSenha("@luno");
//$aluno ->insert();
//echo $aluno;

//atualizando login e senha
//$usuario=new Usuario();
//$usuario->loadById(3);
//$usuario->update("aluno", "aluno123");
//echo $usuario;


//deletando usuarios
$usuario=new Usuario();
$usuario->loadById(3);
$usuario->delete();
echo $usuario;
?>
<?php
require_once("config.php");
//arquivo com o autoload para carregar as classes necessárias
$root = new Usuario();
$root->loadById(2);

echo $root;
//vai funcionar por causa do toString

?>
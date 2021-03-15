<?php
    //arquivo de configurações
    spl_autoload_register(function($nomeClasse){
        $diretorioClasse = "class";
        //criamos essa classe dentro do diretório desse arquivo config
        $filename= $diretorioClasse . DIRECTORY_SEPARATOR . $nomeClasse . ".php";
        //filename é o caminho todo o arquivo, incluindo barras e todas as pastas
        if(file_exists($filename)){
            require_once($filename);
        }
    }

);
?>
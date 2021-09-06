<?php

    //CARREGA CONFIGURAÇÕES DA PLATAFORMA
    require_once "config\config.php";
        
    //roteamento da plataforma
    
    $pasta      = "site";
    $parametros = (isset($_GET["parametro"]) ? $_GET["parametro"] : "home");

    if (substr_count($parametros, "/") > 0) {
        $aParam     = explode("/", $parametros);
        $control    = (file_exists("{$pasta}/{$aParam[0]}.php") ? $aParam[0] : "error");
        $acao       = $aParam[1];
        $id         = (isset($aParam[2]) ? $aParam[2] : 0);
    } else {
        $control    = (file_exists("{$pasta}/{$parametros}.php") ? $parametros : "error");
        $acao       = "";
        $id         = 0;
    }

    //carregamento das views

    require_once $pasta . "/comuns/cabecalho.php";
    require_once $pasta . "/comuns/menu.php";
    require_once $pasta . "/" . $control . ".php";
    require_once $pasta . "/comuns/rodape.php";




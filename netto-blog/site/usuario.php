<?php

switch ($acao){
    case'signIn' :
        
        $post = $_POST;

        var_dump($post);

        // buscar no banco de dados o usiario de acordo com email

        // verificar se o usuario existe
        //verificar senha
        //se não existir vamos 
        //verificar status do usuario
        // se estiver tudo ok vamos fdorecionar o usuarui para home
        //da area administrativa se o usuario for administrador
        //se ele for um visitante vsmos direcion ar para o home do blog

        echo "cheguei  no metodo de login";
        break;

}
<?php 
require __DIR__.'/../config.php';
if (empty($_POST))
{
    echo "Nenhum dado foi encontrado";
    return;
}

echo "E-mail - ".$_POST['username'].'<br/>';
echo "Senha - " . $_POST['password']."<a href='".SOURCE."/login'>Voltar</a>";
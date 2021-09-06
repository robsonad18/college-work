<?php 
require __DIR__.'/../config/config.php';

if (!$_POST)
{
    echo "Nenhum dado foi encontrado "."<a href='".SOURCE."'>Voltar</a>";
    return;
}

echo "Dados enviados com sucesso!" . "<a href='" . SOURCE . "'>Voltar</a>";
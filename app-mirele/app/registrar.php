<?php
require __DIR__.'/../config.php';
if (empty($_POST)) {
    echo "Nenhum dado foi encontrado" . "<a href='" . SOURCE . "/login'>Voltar</a>";
    return;
}

if ($_POST['password1'] != $_POST['password2']) {
    echo "As senhas não são iguais" . "<a href='" . SOURCE . "/login'>Voltar</a>";
    return;
}

echo "E-mail - " . $_POST['username'] . '<br/>';
echo "Senha - " . $_POST['password1'] . "<a href='" . SOURCE . "/login'>Voltar</a>";

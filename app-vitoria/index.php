<?php

if (!isset($_GET)) {
    return;
}
$url = explode('/', $_GET['url'] ?? '');

$get = [];

foreach ($url as $key => $value) {
    $get[] = $url[$key];
}

$namePage = '';
$firstGet = $get[0];

if (count($get) > 1) {
    for ($i = 0; $i < count($get); $i++) {
        $namePage = empty($namePage) ? $get[$i] : $namePage . '/' . $get[$i];
    }
} else {
    $namePage = $firstGet;
}

switch($namePage){
    case null:
    case '':
        require __DIR__ . '/config/config.php';

        require __DIR__ . '/src/header.php';

        require __DIR__ . '/src/main.php';

        require __DIR__ . '/src/footer.php';
        break;
    case "produtos":
        require __DIR__.'/src/produtos.php';
        break;
    case "sobre-nos":
        require __DIR__.'/src/sobre.php';
        break;
    case "fale-conosco":
        require __DIR__.'/src/fale-conosco.php';
        break;
    case "login":
        require __DIR__.'/src/login.php';
        break;
    default:
        require __DIR__ . '/config/config.php';

        require __DIR__ . '/src/header.php';

        require __DIR__ . '/src/main.php';

        require __DIR__ . '/src/footer.php';
        break;
}


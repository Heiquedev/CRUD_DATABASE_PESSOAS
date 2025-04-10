<?php

include 'Controller/PessoaController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo $url;
echo "<br>";

switch ($url) {

    case '/':
        echo "<br>Página Inicial - 🏡🐯🐺🦓";
        break;
    
    case "/pessoa":
        echo "Listar Pessoas - 🧑‍🦲";
        PessoaController::index();
        break;

    case '/pessoa/formpessoa':
        echo "<br>Formulário de Pessoas - 👨";
        PessoaController::form();
        break;

    case '/pessoa/formpessoa/save':
        echo "<br>Formulário de Pessoas Salvar - 👶";
        PessoaController::save();
        break;

    case '/pessoa/delete':
        echo "<br>Formulário de Pessoas Salvar - 👶";
        PessoaController::delete();
        break;

    default:
        echo "<br>erro 404";
        break;


}

?>
<?php

class PessoaController
{
    public static function index()
    {
        include 'Model/PessoaModel.php';
        $model = new PessoaModel();
        $model->getAllRows();
        include "View/modulos/Pessoa/ListaPessoa.php";
    }

    public static function form()
    {
        include "Model/PessoaModel.php";

        $model = new PessoaModel();

        if (isset($_GET['id'])) {
            $model = $model->getById((int)$_GET['id']);
        }
        include 'View/modulos/Pessoa/FormPessoa.php';

       // var_dump($model);
    }

    public static function save()
    {
        //var_dump($_POST);
        //exit;
        include 'Model/PessoaModel.php'; // inclui a model para transportar a pessoa

        $model = new PessoaModel(); // instancia o objeto

        $model->id = $_POST["id"];
        $model->nome = $_POST["nome"];
        $model->cpf = $_POST["cpf"];
        $model->data_nascimento = $_POST["data_nascimento"];

        $model->save(); // salva a pessoa

        header("Location: /pessoa");
    }

    public static function delete()
    {
        //var_dump($_POST);
        //exit;
        include 'Model/PessoaModel.php'; // inclui a model para transportar a pessoa

        $model = new PessoaModel(); // instancia o objeto
        $model->delete((int) $_GET['id']); //deleta a pessoa

        header("Location: /pessoa");
    }
}

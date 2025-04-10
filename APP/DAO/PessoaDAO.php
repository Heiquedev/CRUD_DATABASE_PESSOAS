<?php

class PessoaDAO
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=db_mvc";

        $this->conexao = new PDO($dsn, 'root', 'root'); //credenciais do DB
    }

    public function insert(PessoaModel $model)
    {
        $sql =
            "INSERT INTO pessoa(nome, cpf, data_nascimento)  
        VALUES (?, ?, ?)"; //string sql

        $pst = $this->conexao->prepare($sql);

        $pst->bindValue(1, $model->nome);
        $pst->bindValue(2, $model->cpf);
        $pst->bindValue(3, $model->data_nascimento);

        $pst->execute();
    }

    public function select()
    {
        $sql =
            "SELECT * FROM pessoa"; //string sql

        $pst = $this->conexao->prepare($sql);
        $pst->execute();

        return $pst->fetchAll(PDO::FETCH_CLASS); //Organizar
    }

    public function update(PessoaModel $model)
    {
        $sql =
            "UPDATE pessoa SET nome=?, cpf=?, data_nascimento=? WHERE id=? "; //string sql

        $pst = $this->conexao->prepare($sql);

        $pst->bindValue(1, $model->nome);
        $pst->bindValue(2, $model->cpf);
        $pst->bindValue(3, $model->data_nascimento);
        $pst->bindValue(4, $model->id);

        $pst->execute();

        return $pst->fetchAll(PDO::FETCH_CLASS); //Organizar
    }

    public function selectById(int $id)
    {
        include_once "Model/PessoaModel.php";

        $sql = " SELECT * FROM pessoa WHERE id= ? "; //string sql

        $pst = $this->conexao->prepare($sql);
        $pst->bindValue(1, $id);
        $pst->execute();

        return $pst->fetchObject("PessoaModel");
    }


    public function delete(int $id)
    {
        $sql =
            "DELETE FROM pessoa WHERE id = ?"; //string sql

        $pst = $this->conexao->prepare($sql);
        $pst->bindValue(1, $id);
        $pst->execute();
    }
}

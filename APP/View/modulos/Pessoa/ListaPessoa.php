<?php

//  echo "Aqui deveria ter uma lista.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Lista de Pessoas</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($model->rows as $item): ?>
            <tr>
                <td><?= $item->id ?></td>
                <td><?= $item->nome ?></td>
                <td><?= $item->cpf ?></td>
                <td><?= $item->data_nascimento ?></td>
                <td><button class="btn btn-danger" id="btnDeletar">
                        <a href="/pessoa/delete?id=<?= $item->id ?>">Deletar</a> <button><a href="/pessoa/formpessoa?id=<?= $item->id ?>">Editar</a></button></button></td>
            </tr>

        <?php endforeach ?>
    </table>
</body>

</html>
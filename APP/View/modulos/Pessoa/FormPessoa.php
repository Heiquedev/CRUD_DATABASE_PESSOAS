<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="d-flex justify-content-center w-100">
        <form action="/pessoa/formpessoa/save" method="post">
            <div class="mt-3 mb-3 w-50">
                <input type="hidden" name="id" readonly value="<?= $model->id?>">
                <label class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="mt-3 mb-3 w-50">
                <label class="form-label">CPF:</label>
                <input type="number" class="form-control" id="cpf" maxlength="11" name="cpf">
            </div>
            <div class="mt-3 mb-3 w-50 form-label">
                <label class="form-check-label">Data de Nascimento:</label>
                <input type="date" class="form-check-input" id="data_nascimento" name="data_nascimento">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>


</body>

</html>
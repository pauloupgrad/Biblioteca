<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= TITLE ?> | Cadastro de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include VIEWS . '/Includes/menu.php'; ?>
    <?php /** @var null|\App\Model\Aluno $model */ ?>
    <div class="container">
        <h1>Formulário de Alunos</h1>
        <form class="bg-dark text-white p-5 w-50" action="<?= BASE_URL ?>aluno/cadastro" method="post">
            <input type="hidden" name="id" value="<?= $model->Id ?>">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo:</label>
                <input type="text" class="form-control" name="nome" id="nome" value="<?= $model->Nome ?>">
            </div>

            <div class="mb-3">
                <label for="ra" class="form-label">RA:</label>
                <input type="text" class="form-control" name="ra" id="ra" value="<?= $model->RA ?>">
            </div>

            <div class="mb-3">
                <label for="curso" class="form-label">Curso:</label>
                <input type="text" class="form-control" name="curso" id="curso" value="<?= $model->Curso ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>
</body>

</html>
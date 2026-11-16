<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= TITLE ?> | Lista de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include VIEWS . '/includes/menu.php'; ?>
    <?php /** @var array $lista */ ?>
    <div class="container mt-2">
        <div class="d-flex align-items-center justify-content-between py-3">
            <h1>Listagem de Alunos</h1>
            <a class="btn btn-md btn-dark" href="aluno/cadastro">Cadastrar Novo Aluno</a>
        </div>
        <table class="table table-dark table-hover table-bordered">
            <thead>
                <tr>
                    <th class="text-center" style="width: 60px;">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">CURSO</th>
                    <th style="width: 200px; text-align: center">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $aluno): ?>
                    <tr>
                        <th style="text-align: center;"><?= $aluno->Id ?></th>
                        <td><?= $aluno->Nome ?></td>
                        <td><?= $aluno->Curso ?></td>
                        <td class="d-flex justify-content-around">
                            <a class="btn btn-success btn-sm" href="aluno/cadastro?id=<?= $aluno->Id ?>"><i class="bi bi-pencil-square"></i> Editar</a>
                            <a class="btn btn-danger btn-sm" href="aluno/delete?id=<?= $aluno->Id ?>"><i class="bi bi-trash3"></i>Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>
</body>

</html>
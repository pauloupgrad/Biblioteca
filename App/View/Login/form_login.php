<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= TITLE ?> | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <h1>Acessar Biblioteca</h1>
        <?php /** @var string $erro */ ?>
        <?php /** @var null|\App\Model\Login $model */ ?>
       
        <form class="bg-dark text-white p-5 w-50" action="<?= BASE_URL ?>login" method="post">

            <?= $erro; ?>

            <div class="mb-3">
                <label for="email" class="form-label">Digite seu Email:</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= $model->Email ?>">
            </div>

            <div class="mb-1">
                <label for="senha" class="form-label">Digite sua Senha:</label>
                <input type="password" name="senha" id="senha" class="form-control" aria-describedby="senhaBlock">
                <div id="senhaBlock" class="form-text">
                    Sua senha deve ter entre 8 e 20 caracteres, conter letras e números, e não deve incluir espaços, caracteres especiais ou emojis.
                </div>
            </div>


            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="lembrar" id="lembrar">
                <label class="form-check-label" for="lembrar">
                    Lembrar meu usuario:
                </label>
            </div>


            <button type="submit" class="btn btn-primary">Fazer login</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script>
</body>

</html>
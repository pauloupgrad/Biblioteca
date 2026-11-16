<?php

namespace App\Controller;

use App\Model\Login;

class LoginController
{
    public static function home(): void
    {
        $erro = "";
        $model = new Login();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model->Email = $_POST['email'];
            $model->Senha = $_POST['senha'];
            $model = $model->logar();

            if ($model !== null) {
                $_SESSION['userLogin'] = $model;

                if (isset($_POST['lembrar'])) {
                    \setcookie(
                        name: "sistema_biblioteca_usuario",
                        value: $model->Email,
                        expires_or_options: time() + 60 * 60 * 24 * 30
                    );
                }

                \header("Location: " . \BASE_URL);
            } else {
                $erro = "<div class='alert alert-danger' role='alert'>E-mail ou senha incorretos!</div>";
            }
        }
        
        if(isset($_COOKIE['sistema_biblioteca_usuario'])){
            $model->Email = $_COOKIE['sistema_biblioteca_usuario'];
        }

        include \VIEWS . '/Login/form_login.php';
    }

    public static function logout(): void
    {
        \session_destroy();
        \header("Location: " . BASE_URL . "login");
    }
}

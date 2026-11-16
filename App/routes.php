<?php

use App\Controller\{AlunoController, HomeController};

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case BASE_URL:
        HomeController::home();
        break;
    case BASE_URL . 'aluno':
        AlunoController::litar();
        break;
    case BASE_URL . 'aluno/cadastro':
        AlunoController::cadastro();
        break;
    case BASE_URL . 'aluno/delete':
        AlunoController::delete();
        break;
}

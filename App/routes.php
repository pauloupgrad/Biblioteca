<?php

use App\Controller\AlunoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$base = '/Biblioteca/App/';

switch ($url) {
    case $base:
        echo 'Página Inicial';
        break;
    case $base . 'aluno':
        AlunoController::litar();
        break;
    case $base . 'aluno/cadastro':
        AlunoController::cadastro();
        break;
}

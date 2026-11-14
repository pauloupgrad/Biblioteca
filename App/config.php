<?php

// Diretorio base
define('BASE_DIR', dirname(__FILE__, 2));
define('BASE_URL', dirname(__FILE__));
// Onde estao as views
define('VIEWS', BASE_DIR . '/view');
// Nome do Projeto
define('TITLE', 'WG Biblioteca');
// Acesso ao banco de dados
$_ENV['db']['host'] = 'localhost';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = '';
$_ENV['db']['dbname'] = 'biblioteca';
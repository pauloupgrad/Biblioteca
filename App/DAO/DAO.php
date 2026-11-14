<?php

namespace App\DAO;

use PDO;

class DAO extends PDO
{
    protected static ?PDO $conexao = null;

    public function __construct()
    {
        //$dsn = "mysql:host={$_ENV['db']['host']};dbname={$_ENV['db']['dbname']};charset=utf8mb4';";
        $dsn = 'mysql:host='.$_ENV['db']['host'].';dbname='.$_ENV['db']['dbname'].';charset=utf8mb4';
        if (self::$conexao == null) 
        {
            self::$conexao = new PDO(
                $dsn,
                $_ENV['db']['user'],
                $_ENV['db']['pass'],
                [
                    PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        }
    }
}

<?php

namespace App\Model;

use App\DAO\LoginDAO;

final class Login
{
    public ?string $Email = null;
    public ?string $Senha = null;

    public function logar() : ?Login
    {
       return new LoginDAO()->autenticar($this); 
    }
}
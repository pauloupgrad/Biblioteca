<?php

namespace App\Controller;

abstract class Controller
{
    protected static function isProtected()
    {
        if (!isset($_SESSION['userLogin'])) {
            \header("Location: " . BASE_URL . "login");
        }
    }
}

<?php

namespace App\Controller;



final class HomeController 
{
    public static function home()
    {
        include \VIEWS.'/Home/home.php';
    }
}
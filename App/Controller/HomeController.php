<?php

namespace App\Controller;

final class HomeController extends Controller
{
    public static function home() : void
    {
        parent::isProtected();
        include \VIEWS.'/Home/home.php';
    }
}
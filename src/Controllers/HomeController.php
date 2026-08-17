<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): void
    {
        $this->render('landing/landing-scaffold');
    }

    public function soluciones(): void
    {
        $this->render('pages/soluciones');
    }

    public function productos(): void
    {
        $this->render('pages/productos');
    }

    public function comoFuncion(): void
    {
        $this->render('pages/como-funciona');
    }

    public function demostracion(): void
    {
        $this->render('pages/demostracion');
    }

    public function beneficios(): void
    {
        $this->render('pages/beneficios');
    }
}

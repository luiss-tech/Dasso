<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function showLogin(): void
    {
        $this->render('auth/login');
    }

    public function login(): void
    {
        // Placeholder para autenticación.
    }

    public function logout(): void
    {
        // Placeholder para cierre de sesión.
    }
}

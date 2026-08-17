<?php

namespace App\Middleware;

use App\Core\Session;

class AuthMiddleware
{
    public function handle(): bool
    {
        Session::start();

        $userId = Session::get('user_id');

        return is_int($userId) && $userId > 0;
    }
}

<?php

namespace App\Core;

class Csrf
{
    private const TOKEN_KEY = '_csrf_token';

    public static function generateToken(): string
    {
        Session::start();

        $token = bin2hex(random_bytes(32));
        Session::set(self::TOKEN_KEY, $token);

        return $token;
    }

    public static function validateToken(?string $token): bool
    {
        Session::start();

        $sessionToken = Session::get(self::TOKEN_KEY);

        if (!is_string($sessionToken) || !is_string($token)) {
            return false;
        }

        return hash_equals($sessionToken, $token);
    }
}

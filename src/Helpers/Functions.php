<?php

namespace App\Helpers;

class Functions
{
    public static function sanitizeString(string $value): string
    {
        return trim(htmlspecialchars($value, ENT_QUOTES, 'UTF-8'));
    }
}

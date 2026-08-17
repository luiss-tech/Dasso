<?php

namespace App\Core;

class Sanitizer
{
    public static function escapeHtml(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    public static function sanitizeString(string $value): string
    {
        return trim(filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS));
    }

    public static function sanitizeEmail(string $value): string
    {
        return filter_var(trim($value), FILTER_SANITIZE_EMAIL) ?: '';
    }
}

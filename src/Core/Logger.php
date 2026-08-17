<?php

namespace App\Core;

class Logger
{
    public static function log(string $message): void
    {
        $timestamp = date('Y-m-d H:i:s');
        $entry = sprintf("[%s] %s%s", $timestamp, $message, PHP_EOL);

        file_put_contents(Config::LOG_PATH, $entry, FILE_APPEND | LOCK_EX);
    }
}

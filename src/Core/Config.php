<?php

namespace App\Core;

class Config
{
    public const DB_HOST = '127.0.0.1';
    public const DB_NAME = 'database_name';
    public const DB_USER = 'root';
    public const DB_PASS = '';
    public const DB_CHARSET = 'utf8mb4';

    public const APP_ENV = 'development';
    public const APP_DEBUG = true;
    public const APP_URL = 'http://localhost/Pagina';

    public const UPLOAD_PATH = __DIR__ . '/../../public/uploads';
    public const LOG_PATH = __DIR__ . '/../../storage/logs/app.log';
}

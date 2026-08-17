<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Config;
use App\Core\Logger;
use App\Core\Database;
use App\Core\Router;

// Entry point for API requests. Contains routing bootstrap and request handling.
$router = new Router();

// Define routes here using controller actions.
// Example: $router->get('/api/status', [App\Controllers\ApiController::class, 'status']);

$router->handle($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

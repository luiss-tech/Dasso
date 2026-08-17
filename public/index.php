<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\HomeController;

$router = new Router();
$homeController = new HomeController();

$router->get('/', [$homeController, 'index']);
// Marketing pages
$router->get('/soluciones', [$homeController, 'soluciones']);
$router->get('/productos', [$homeController, 'productos']);
$router->get('/como-funciona', [$homeController, 'comoFuncion']);
$router->get('/demostracion', [$homeController, 'demostracion']);
$router->get('/beneficios', [$homeController, 'beneficios']);

$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/';
$basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');

if ($basePath !== '' && $basePath !== '/' && str_starts_with($requestPath, $basePath)) {
	$requestPath = substr($requestPath, strlen($basePath)) ?: '/';
}

$router->handle($requestPath, $_SERVER['REQUEST_METHOD']);

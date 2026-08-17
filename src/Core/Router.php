<?php

namespace App\Core;

class Router
{
    private array $routes = [];
    private array $middlewares = [];

    public function get(string $path, callable $handler, array $middleware = []): void
    {
        $this->addRoute('GET', $path, $handler, $middleware);
    }

    public function post(string $path, callable $handler, array $middleware = []): void
    {
        $this->addRoute('POST', $path, $handler, $middleware);
    }

    public function put(string $path, callable $handler, array $middleware = []): void
    {
        $this->addRoute('PUT', $path, $handler, $middleware);
    }

    public function delete(string $path, callable $handler, array $middleware = []): void
    {
        $this->addRoute('DELETE', $path, $handler, $middleware);
    }

    private function addRoute(string $method, string $path, callable $handler, array $middleware): void
    {
        $this->routes[$method][$path] = $handler;
        $this->middlewares[$method][$path] = $middleware;
    }

    public function handle(string $uri, string $method): void
    {
        $path = parse_url($uri, PHP_URL_PATH) ?: '/';
        $method = strtoupper($method);

        $handler = $this->routes[$method][$path] ?? null;
        $middlewareList = $this->middlewares[$method][$path] ?? [];

        if ($handler === null) {
            http_response_code(404);
            echo json_encode(['error' => 'Route not found']);
            return;
        }

        foreach ($middlewareList as $middleware) {
            if (is_callable($middleware) && $middleware() === false) {
                http_response_code(403);
                echo json_encode(['error' => 'Access denied']);
                return;
            }
        }

        call_user_func($handler);
    }
}

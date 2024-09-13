<?php

namespace App\Config;

use App\HTTP\Request;
use App\HTTP\Response;

class Router {

    private $routes = [];

    public function get($route, $callback) {
        $this->addRoute('GET', $route, $callback);
    }

    public function post($route, $callback) {
        $this->addRoute('POST', $route, $callback);
    }

    private function addRoute($method, $route, $callback) {
        $this->routes[] = [
            'method' => $method,
            'pattern' => $this->convertToRegex($route),
            'callback' => $callback
        ];
    }

    private function convertToRegex($route) {
        return "#^" . preg_replace('/\{([a-zA-Z0-9_]+)\}/', '(?P<\1>[^/]+)', $route) . "$#";
    }

    public function dispatch(Request $request, Response $response) {
        foreach ($this->routes as $route) {
            if ($route['method'] === $request->getMethod() && preg_match($route['pattern'], $request->getUri(), $matches)) {
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                return call_user_func_array($route['callback'], array_merge([$request, $response], $params));
            }
        }

        $this->renderErrorPage($response, 404, "Page Not Found");
    }

    private function renderErrorPage(Response $response, $code, $message) {
        $response->setStatusCode($code);
        ob_start();
        include __DIR__ . '/../../src/Views/Error.php';
        $content = ob_get_clean();
        $response->send($content);
    }
}

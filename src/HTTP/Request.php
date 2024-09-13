<?php

namespace App\HTTP;

class Request {

    private $method;
    private $uri;
    private $formData;
    private $queryParams;

    public function __construct() {
        
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($this->method === 'POST') {
            $this->formData = $_POST;
        }

        $this->queryParams = $_GET;
    }

    public function getMethod() {
        return $this->method;
    }

    public function getUri() {
        return $this->uri;
    }

    public function getFormData() {
        return $this->formData;
    }

    public function getQueryParams() {
        return $this->queryParams;
    }
    
    public function getQueryParam($key, $default = null) {
        return isset($this->queryParams[$key]) ? $this->queryParams[$key] : $default;
    }
}

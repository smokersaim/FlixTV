<?php

namespace App\HTTP;

class Response {

    private $statusCode = 200;

    public function setStatusCode($code) {
        $this->statusCode = $code;
        http_response_code($code);
    }

    public function send($body) {
        echo $body;
    }

}

<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Config\Routes;
use App\HTTP\Request;
use App\HTTP\Response;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$request = new Request(); 
$response = new Response();

$routes = new Routes();
$routes->dispatch($request, $response);
<?php

namespace App\Config;

use App\HTTP\Request;
use App\HTTP\Response;
use App\Config\Router;

use App\Controllers\MainController;
use App\Controllers\MoviesController;
use App\Controllers\ShowsController;
use App\Controllers\SearchController;

class Routes {
    
    private $router;
    private $mainController;
    private $moviesController;
    private $showsController;
    private $searchController;

    public function __construct() {
        $this->router = new Router();
        $this->mainController = new MainController();
        $this->moviesController = new MoviesController();
        $this->showsController = new ShowsController();
        $this->searchController = new SearchController();
        $this->defineRoutes();
    }

    private function defineRoutes() {
        
        $this->router->get('/', function(Request $request, Response $response) {
            $this->mainController->index($request, $response);
        });
        
        $this->router->get('/movies/{filter}', function(Request $request, Response $response, $filter) {
            $this->moviesController->getMovies($request, $response, $filter);
        });

        $this->router->get('/movie/details', function(Request $request, Response $response) {
            $this->moviesController->getMovieDetails($request, $response);
        });

        $this->router->get('/shows/{filter}', function(Request $request, Response $response, $filter) {
            $this->showsController->getShows($request, $response, $filter);
        });

        $this->router->get('/show/details', function(Request $request, Response $response) {
            $this->showsController->getShowDetails($request, $response);
        });

        $this->router->get('/trending', function(Request $request, Response $response) {
            $this->searchController->trending($request, $response);
        });

        $this->router->get('/categories', function(Request $request, Response $response) {
            $this->searchController->categories($request, $response);
        });

        $this->router->get('/search', function(Request $request, Response $response) {
            $this->searchController->search($request, $response);
        });

        $this->router->get('/about', function(Request $request, Response $response) {
            $this->mainController->about($response);
        });

        $this->router->get('/contact', function(Request $request, Response $response) {
            $this->mainController->contact($response);
        });

        $this->router->post('/contact', function(Request $request, Response $response) {
            $this->mainController->contactForm($request, $response);
        });

        $this->router->get('/privacy-policy', function(Request $request, Response $response) {
            $this->mainController->privacy($response);
        });

        $this->router->get('/terms-and-conditions', function(Request $request, Response $response) {
            $this->mainController->terms($response);
        });

    }

    public function dispatch(Request $request, Response $response) {
        $this->router->dispatch($request, $response);
    }
}

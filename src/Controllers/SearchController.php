<?php

namespace App\Controllers;

use App\HTTP\Request;
use App\HTTP\Response;

use App\Helpers\Metadata;
use App\Models\Search;

class SearchController
{
    protected $metadata;
    protected $search;

    public function __construct() {
        $this->metadata = new Metadata();
        $this->search = new Search();
    }

    public function search(Request $request, Response $response) {
        $queryParams = $request->getQueryParams();
        $keywords = $queryParams['keywords'] ?? '';
        $genre = $queryParams['genre'] ?? '';
        $page = $queryParams['page'] ?? 1;
    
        $param = '';
        $value = '';
        $results = [];
    
        if (!empty($keywords)) {
            $param = 'keywords';
            $value = $keywords;
            $url = '/search?keywords=' . urlencode(strtolower($value));
            $results = $this->search->searchByKeywords($keywords, $page);
        } elseif (!empty($genre)) {
            $param = 'genre'; 
            $value = $genre;
            $url = '/search?genre=' . urlencode(strtolower($value));
            $results = $this->search->searchByGenre($genre, $page);
        } else {
            $value = 'Search Query Empty';
        }
    
        $metadata = $this->metadata->getSearchMeta($param, $value);
    
        $data = [
            'value' => htmlspecialchars(ucwords($value), ENT_QUOTES, 'UTF-8'),
            'pagination_url' => $url, 
            'current_page' => $results['current_page'] ?? 0,
            'total_pages' => $results['total_pages'] ?? 0,
            'total_items' => $results['total_items'] ?? 0,
            'results' => $results['results'] ?? []
        ];
        return $this->render('Layout', $metadata, $data, $response);
    }

    public function categories(Request $request, Response $response) {
        $metadata = $this->metadata->getCategoriesMeta();
        $data = $this->search->searchCategories();
        return $this->render('Categories', $metadata, $data, $response);
    }

    public function trending(Request $request, Response $response) {

        $page = $request->getQueryParams()['page'] ?? 1;
        $metadata = $this->metadata->getTrendingMeta();

        $results = $this->search->searchTrending($page);

        $data = [
            'value' => 'Trending Today',
            'pagination_url' => '/trending?',
            'current_page' => $results['current_page'] ?? 0,
            'total_pages' => $results['total_pages'] ?? 0,
            'total_items' => $results['total_items'] ?? 0,
            'results' => $results['results'] ?? []
        ];
 
        return $this->render('Layout', $metadata, $data, $response);
    }

    private function render($view, $metadata, $data = [], Response $response) {
        ob_start();
        extract($metadata);
        extract($data);
        include __DIR__ . "/../Components/Header.php";
        include __DIR__ . "/../Views/{$view}.php";
        include __DIR__ . "/../Components/Footer.php";
        $content = ob_get_clean();
        $response->send($content);
    }
}

<?php

namespace App\Controllers;

use App\HTTP\Request;
use App\HTTP\Response;

use App\Helpers\Metadata;
use App\Models\Shows;

use App\Models\Details;

class ShowsController {

    protected $metadata;
    protected $shows;
    protected $details;

    public function __construct() {
        $this->metadata = new Metadata();
        $this->shows = new Shows();
        $this->details = new Details();
    }

    public function getShows(Request $request, Response $response, $filter = null) {
 
        $page = $request->getQueryParams()['page'] ?? 1;

        if (is_null($filter) || $filter === '') {
            $this->renderErrorPage($response, 400, "Invalid Filter");
            exit();
        }

        $metadata = $this->metadata->getShowsMeta($filter);
        $results = $this->shows->getShows($filter, $page);

        $data = [
            'value' => ucwords(str_replace('_', ' ', $filter)) . ' Shows',
            'pagination_url' => '/shows/' . $filter . '?',
            'current_page' => $results['current_page'] ?? 0,
            'total_pages' => $results['total_pages'] ?? 0,
            'total_items' => $results['total_items'] ?? 0,
            'results' => $results['results'] ?? []
        ];

        return $this->render('Layout', $metadata, $data, $response);
    }

    public function getShowDetails(Request $request, Response $response) {

        $viewkey = $request->getQueryParams()['viewkey'] ?? null;

        if (is_null($viewkey) || $viewkey === '') {
            header('Location: /shows/popular');
            exit();
        }

        $results = $this->details->showDetails($viewkey);

        $data = [
            'show_details' => $results ['result'] ?? []
        ];

        $metadata = $this->metadata->getShowDetailsMeta($data);

        return $this->render('Show', $metadata, $data, $response);
    
    }

    private function render($view, $metadata, $data = [], Response $response) {
        extract($data);
        extract($metadata);
        include __DIR__ . "/../Components/Header.php";
        include __DIR__ . "/../Views/{$view}.php";
        include __DIR__ . "/../Components/Footer.php";
        $content = ob_get_clean();
        $response->send($content);
    }

    private function renderErrorPage(Response $response, $code, $message) {
        $response->setStatusCode($code);
        include __DIR__ . '/../../src/Views/Error.php';
        $content = ob_get_clean();
        $response->send($content);
    }

    private function redirect(Response $response, $url) {
        $response->setHeader('Location', $url);
        $response->setStatusCode(302);
        $response->send();
        exit();
    }
}

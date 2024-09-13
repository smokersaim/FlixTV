<?php

namespace App\Controllers;

use App\HTTP\Request;
use App\HTTP\Response;

use App\Helpers\Metadata;

use App\Models\Home;
use App\Models\Contact;

class MainController 
{
    protected $metadata;
    protected $home;
    protected $contact;

    public function __construct() {
        $this->metadata = new Metadata();
        $this->contact = new Contact();
        $this->home = new Home();
    }

    public function index(Request $request, Response $response) {

        $page = $request->getQueryParams()['page'] ?? 1;
        $metadata = $this->metadata->getIndexMeta();

        $results = $this->home->getData($page = 1);;
    
        $data = [
            'data' => $results
        ];
    
        $this->render('Home', $metadata, $data, $response);
    }
        
    public function about(Response $response) {
        $metadata = $this->metadata->getAboutMeta();
        $this->render('About', $metadata, [], $response);
    }

    public function contact(Response $response) {
        $metadata = $this->metadata->getContactMeta();
        $this->render('Contact', $metadata, [], $response);
    }

    public function contactForm(Request $request, Response $response) {
        $formData = $request->getFormData();
        $result = $this->contact->sendFormData($formData); 
        $metadata = $this->metadata->getContactMeta();
        $this->render('Contact', $metadata, ['result' => $result], $response);
    }

    public function privacy(Response $response) {
        $metadata = $this->metadata->getPrivacyMeta();
        $this->render('Privacy', $metadata, [], $response);
    }

    public function terms(Response $response) {
        $metadata = $this->metadata->getTermsMeta();
        $this->render('Terms', $metadata, [], $response);
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

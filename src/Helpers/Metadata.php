<?php

namespace App\Helpers;

class Metadata
{
    protected $name;
    protected $title;
    protected $description;
    protected $keywords;
    protected $url;

    public function __construct() {
        $this->name = $_ENV['APP_NAME'];
        $this->title = $_ENV['APP_TITLE'];
        $this->description = $_ENV['APP_DESCRIPTION'];
        $this->keywords = $_ENV['APP_KEYWORDS'] ;
        $this->url = $_ENV['BASE_URL'];
    }

    public function getIndexMeta() {
        return [
            'title' => $this->title,  
            'description' => $this->description,
            'keywords' => $this->keywords,
            'url' => $this->url,
            'robots' => 'index, follow',
            'header' => 'header header--hidden'
        ];
    }

    public function getAboutMeta() {
        return [
            'title' => "About - $this->name",
            'description' => $this->description,
            'keywords' => $this->keywords,
            'url' => $this->url . '/about',
            'robots' => 'index, nofollow',
            'header' => 'header header--hidden'
        ];
    }

    public function getContactMeta() {
        return [
            'title' => "Contact - $this->name",
            'description' => $this->description,
            'keywords' => $this->keywords,
            'url' => $this->url . '/contact',
            'robots' => 'index, nofollow',
            'header' => 'header header--hidden'
        ];
    }

    public function getPrivacyMeta() {
        return [
            'title' => "Privacy Policy - $this->name",
            'description' => $this->description,
            'keywords' => $this->keywords,
            'url' => $this->url . '/privacy-policy',
            'robots' => 'index, nofollow',
            'header' => 'header header--hidden'
        ];
    }

    public function getTermsMeta() {
        return [
            'title' => "Terms & Conditions - $this->name",
            'description' => $this->description,
            'keywords' => $this->keywords,
            'url' => $this->url . '/terms-and-conditions',
            'robots' => 'index, nofollow',
            'header' => 'header header--hidden'
        ];
    }

    public function getSearchMeta($param, $value) {
        return [
            'title' => ucwords($value) . ' - ' . $this->name,
            'description' => $this->description,
            'keywords' => $this->keywords,
            'url' => $this->url . '/search?' . $param . '=' . urlencode($value),
            'robots' => 'noindex, nofollow',
            'header' => 'header header--static'
        ];
    }

    public function getCategoriesMeta() {
        return [
            'title' => "Categories - $this->name",
            'description' => $this->description,
            'keywords' => $this->keywords,
            'url' => $this->url . '/categories',
            'robots' => 'index, nofollow',
            'header' => 'header header--hidden'
        ];
    }

    public function getTrendingMeta() {
        return [
            'title' => "Trending Today - $this->name",
            'description' => $this->description,
            'keywords' => $this->keywords,
            'url' => $this->url . '/trending',
            'robots' => 'index, nofollow',
            'header' => 'header header--static'
        ];
    }

    public function getMoviesMeta($filter) {
        return [
            'title' => ucwords(str_replace('_', ' ', $filter)) . ' Movies - ' . $this->name,
            'description' => $this->description,
            'keywords' => $this->keywords,
            'url' => $this->url . '/movies/' . urlencode($filter),
            'robots' => 'noindex, nofollow',
            'header' => 'header header--static'
        ];
    }

    public function getShowsMeta($filter) {
        return [
            'title' => ucwords(str_replace('_', ' ', $filter)) . ' Shows - ' . $this->name,
            'description' => $this->description,
            'keywords' => $this->keywords,
            'url' => $this->url . '/tv/' . urlencode($filter),
            'robots' => 'noindex, nofollow',
            'header' => 'header header--static'
        ];
    }

    public function getMovieDetailsMeta($data) {
        $movieDetails = $data['movie_details'];
        return [
            'title' => "{$movieDetails['title']} - $this->name",
            'description' => "{$movieDetails['overview']}",
            'keywords' => $this->keywords,
            'url' => $this->url . '/movie/details?viewkey=' . urlencode($movieDetails['id']) . '&title=' . urlencode($movieDetails['title']),
            'robots' => 'index, nofollow',
            'header' => 'header header--hidden',
            'shareImage' => "{$movieDetails['backdrop']}"
        ];
    }

    public function getShowDetailsMeta($data) {
        $showDetails = $data['show_details'];
        return [
            'title' => "{$showDetails['title']} - $this->name",
            'description' => "{$showDetails['overview']}",
            'keywords' => $this->keywords,
            'url' => $this->url . '/tv/details?viewkey=' . urlencode($showDetails['id']) . '&title=' . urlencode($showDetails['title']),
            'robots' => 'index, nofollow',
            'header' => 'header header--hidden',
            'shareImage' => "{$showDetails['backdrop']}"
        ];
    }
    
}

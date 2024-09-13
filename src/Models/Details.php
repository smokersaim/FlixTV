<?php

namespace App\Models;

class Details extends Genres {

    public function __construct() {
        parent::__construct();
    }

    public function movieDetails($viewkey) {
        $data = $this->fetchFromApi('movie/' . $viewkey);
        return $this->mapData($data);
    }

    public function showDetails($viewkey) {
        $data = $this->fetchFromApi('tv/' . $viewkey);
        return $this->mapData($data);
    }

    private function mapData(array $data): array {
        return [
            'result' => $this->mapItem($data)
        ];
    }
    
    private function mapItem(array $item): array {
        return [
            'id' => $item['id'] ?? null,
            'title' => $item['title'] ?? $item['name'] ?? 'Unknown Title',
            'overview' => $item['overview'] ?? null,
            'genre' => !empty($item['genres'][0]['name']) ? $item['genres'][0]['name'] : 'N/A',
            'genres' => !empty($item['genres']) ? implode(', ', array_column($item['genres'], 'name')) : 'N/A',
            'rating' => isset($item['vote_average']) ? number_format($item['vote_average'], 1) : 'N/A',
            'release' => !empty($item['release_date']) ? date('F j, Y', strtotime($item['release_date'])) : (!empty($item['first_air_date']) ? date('F j, Y', strtotime($item['first_air_date'])) : 'N/A'),
            'runtime' => isset($item['runtime']) ? $this->formatRuntime($item['runtime']) : 'N/A',
            'poster' => !empty($item['poster_path']) ? 'http://image.tmdb.org/t/p/w154' . $item['poster_path'] : $_ENV['BASE_URL'] . '/assets/images/poster.jpg',
            'backdrop' => !empty($item['backdrop_path']) ? 'http://image.tmdb.org/t/p/w1280' . $item['backdrop_path'] : $_ENV['BASE_URL'] . '/assets/images/backdrop.jpg',
        ];
    }

    private function formatRuntime(int $minutes): string {
        $hours = intdiv($minutes, 60);
        $minutes = $minutes % 60;
    
        $runtime = [];
        if ($hours > 0) {
            $runtime[] = "{$hours} hr";
        }
        if ($minutes > 0) {
            $runtime[] = "{$minutes} min";
        }
    
        return implode(' ', $runtime);
    }
    
    
}
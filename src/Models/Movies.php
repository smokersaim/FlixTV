<?php

namespace App\Models;

class Movies extends Genres {

    public function __construct() {
        parent::__construct();
    }

    public function getMovies(string $filter, int $page): array {

        $data = $this->fetchFromApi('movie/' . $filter, ['page' => $page]);

        $data['results'] = array_map(function ($item) {
            $item['media_type'] = 'movie';
            return $item;
        }, $data['results'] ?? []);

        $data['results'] = array_map(function ($item) {
            $genres = $this->getGenreNames($item['genre_ids'], $item['media_type']);
            $item['genre'] = $genres['genre'];
            $item['genres'] = $genres['genres'];
            return $item;
        }, array_filter($data['results'], function ($item) {
            return in_array($item['media_type'], ['movie', 'tv']);
        }));

        return $this->mapData($data);
    }

    private function mapData(array $data): array {
        $mappedData = array_map(function ($item) {
            return [
                'id' => $item['id'] ?? null,
                'type' => $item['media_type'] === 'tv' ? 'TV' : 'Movie',
                'title' => $item['title'] ?? $item['name'] ?? 'Unknown Title',
                'genre' => explode(' & ', $item['genre'] ?? 'N/A')[0] ?? 'N/A',
                'rating' => isset($item['vote_average']) ? number_format($item['vote_average'], 1) : 'N/A',
                'release' => !empty($item['release_date']) ? date('Y', strtotime($item['release_date'])) : (!empty($item['first_air_date']) ? date('Y', strtotime($item['first_air_date'])) : 'N/A'),
                'poster' => !empty($item['poster_path']) ? 'http://image.tmdb.org/t/p/w154' . $item['poster_path'] : $_ENV['BASE_URL'] . '/assets/images/poster.jpg',
                'backdrop' => !empty($item['backdrop_path']) ? 'http://image.tmdb.org/t/p/w300' . $item['backdrop_path'] : $_ENV['BASE_URL'] . '/assets/images/backdrop.jpg',
            ];
        }, $data['results'] ?? []);

        return [
            'current_page' => $data['page'] ?? 0,
            'total_pages' => $data['total_pages'] ?? 0,
            'total_items' => $data['total_results'] ?? 0,
            'results' => $mappedData,
        ];
    }

}

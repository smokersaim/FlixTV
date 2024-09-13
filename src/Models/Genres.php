<?php

namespace App\Models;

use GuzzleHttp\Exception\RequestException;

class Genres extends TMDB
{
    private array $moviesGenres = [];
    private array $showsGenres = [];

    public function __construct() {
        parent::__construct();
        $this->moviesGenres = $this->fetchGenres('genre/movie/list');
        $this->showsGenres = $this->fetchGenres('genre/tv/list');
    }

    public function getMoviesGenres(): array {
        return $this->moviesGenres;
    }

    public function getShowsGenres(): array {
        return $this->showsGenres;
    }

    public function getGenreNames(array $genreIds, string $type = 'movie'): array {
        return $this->mapGenres($genreIds, $type);
    }

    private function fetchGenres(string $apiURL): array {
        try {
            $response = $this->client->request('GET', $apiURL, [
                'query' => [
                    'api_key' => $this->apiKey,
                    'language' => 'en-US'
                ]
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody()->getContents(), true);
                $genres = [];

                foreach ($data['genres'] as $genre) {
                    $genres[$genre['id']] = $genre['name'];
                }

                return $genres;
            } else {
                throw new \Exception("Failed to fetch genres: HTTP {$response->getStatusCode()}");
            }
        } catch (RequestException $e) {
            throw new \Exception("HTTP Request failed: " . $e->getMessage());
        }
    }

    protected function mapGenres(array $genreIds, string $type = 'movie'): array {
        $genres = $type === 'tv' ? $this->showsGenres : $this->moviesGenres;

        $mappedGenres = array_map(function($id) use ($genres) {
            return $genres[$id] ?? 'Unknown';
        }, $genreIds);

        return [
            'genre'  => $mappedGenres[0] ?? 'Unknown',
            'genres' => $mappedGenres,
        ];
    }
}

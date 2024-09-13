<?php

namespace App\Models;

class Search extends Genres
{
    public function __construct() {
        parent::__construct();
    }

    public function searchByKeywords(string $keywords, int $page = 1): array {
        $data = $this->fetchFromApi('search/multi', [
            'query' => $keywords,
            'page' => $page
        ]);

        $data['results'] = array_map(
            function ($item) {
                $genres = $this->getGenreNames($item['genre_ids'], $item['media_type']);
                return array_merge(
                    [
                        'genre' => $genres['genre'],
                        'genres' => $genres['genres']
                    ],
                    $item
                );
            },
            array_filter($data['results'], function ($item) {
                return in_array($item['media_type'], ['movie', 'tv']);
            })
        );

        return $this->mapData($data);
    }

    public function searchByGenre(string $genre, int $page = 1): array {
        $movies = $this->searchByGenreType('movie', $genre, $page);
        $shows = $this->searchByGenreType('tv', $genre, $page);

        $results = array_merge($movies['results'], $shows['results']);

        usort($results, function($a, $b) {
            $ratingA = $a['rating'] ?? 0;
            $ratingB = $b['rating'] ?? 0;
            return $ratingB <=> $ratingA; 
        });

        return [
            'current_page' => $movies['page'] ?? $movies['current_page'] ?? 0,
            'total_pages' => $movies['total_pages'] ?? 0,
            'total_items' => $movies['total_results'] ?? $movies['total_items'] ?? 0,
            'results' => $results
        ];
    }

    private function searchByGenreType(string $type, string $genre, int $page = 1): array {
        $genres = $type === 'movie' ? $this->getMoviesGenres() : $this->getShowsGenres();
        $genreId = $this->getGenreId($genres, $genre);

        if (!$genreId) {
            return ['current_page' => $page, 'results' => []];
        }

        $data = $this->fetchFromApi("discover/{$type}", [
            'with_genres' => $genreId,
            'page' => $page
        ]);

        $data['results'] = array_map(function ($item) use ($genre, $type) {
            return array_merge(
                $item,
                [
                    'media_type' => $type,
                    'genre' => ucwords($genre)
                ]
            );
        }, $data['results'] ?? []);

        return $this->mapData($data);
    }

    private function getGenreId(array $genres, string $genre): ?int {
        $genreLower = strtolower($genre);
        $pattern = '/' . preg_quote($genreLower, '/') . '/i';
        $matchingGenres = preg_grep($pattern, array_map('strtolower', $genres));

        if (empty($matchingGenres)) {
            return null;
        }

        $genreName = reset($matchingGenres);
        return array_search($genreName, array_map('strtolower', $genres));
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

    public function searchCategories(): array {
        $cacheDir = __DIR__ . '/../Cookies';
        $cacheFile = $cacheDir . '/Categories.json';
    
        $cacheLifetime = 30 * 24 * 60 * 60;
        $currentTime = time();
    
        if (file_exists($cacheFile) && ($currentTime - filemtime($cacheFile)) < $cacheLifetime) {
            $cachedData = json_decode(file_get_contents($cacheFile), true);
            if ($cachedData !== null) {
                return $cachedData;
            }
        }
    
        $movieGenres = $this->getMoviesGenres();
    
        $genres = array_map(function ($id, $name) {
            return [
                'id' => $id,
                'name' => ucfirst(strtolower($name))
            ];
        }, array_keys($movieGenres), $movieGenres);
    
        $genreResults = [];
        $usedBackdrops = [];
    
        foreach ($genres as $genre) {
            $results = $this->searchByGenre($genre['name'], $page = 1);
    
            $backdrop = null;
            foreach ($results['results'] as $result) {
                if (!in_array($result['backdrop'], $usedBackdrops)) {
                    $backdrop = $result['backdrop'];
                    $usedBackdrops[] = $backdrop;
                    break;
                }
            }
    
            $displayGenre = ($genre['name'] === 'Science fiction') ? 'Sci-Fi' : $genre['name'];
    
            $genreResults[] = [
                'genre' => $displayGenre,
                'items' => $results['total_items'],
                'backdrop' => $backdrop
            ];
        }
    
        file_put_contents($cacheFile, json_encode($genreResults));
    
        return $genreResults;
    }    
    
    public function searchTrending(int $page = 1): array {
        $data = $this->fetchFromApi('trending/all/day', [
            'page' => $page
        ]);

        $data['results'] = array_map(
            function ($item) {
                $genres = $this->getGenreNames($item['genre_ids'], $item['media_type']);
                return array_merge(
                    [
                        'genre' => $genres['genre'],
                        'genres' => $genres['genres']
                    ],
                    $item
                );
            },
            array_filter($data['results'], function ($item) {
                return in_array($item['media_type'], ['movie', 'tv']);
            })
        );

        return $this->mapData($data);
    }

}
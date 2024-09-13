<?php
namespace App\Models;

use App\Models\Movies;
use App\Models\Shows;
use App\Models\Search;

class Home extends Genres
{

    protected $movies;
    protected $shows;
    protected $search;

    public function __construct() {
        $this->movies = new Movies();
        $this->shows = new Shows();
        $this->search = new Search();
    }

    public function getData(int $page = 1): array {

        $cacheDir = __DIR__ . '/../Cookies';
        $cacheFile = $cacheDir . '/Home.json';
        $cacheLifetime = 1 * 24 * 60 * 60;
        $currentTime = time();

        if (file_exists($cacheFile) && ($currentTime - filemtime($cacheFile)) < $cacheLifetime) {
            $cachedData = json_decode(file_get_contents($cacheFile), true);
            if ($cachedData !== null) {
                return $cachedData;
            }
        }

        $trending = $this->search->searchTrending($page);

        $popularMovies = $this->movies->getMovies($filter = 'popular', $page);
        $nowPlayingMovies = $this->movies->getMovies($filter = 'now_playing', $page);
        $upcomingMovies = $this->movies->getMovies($filter = 'upcoming', $page);
        $topMovies = $this->movies->getMovies($filter = 'top_rated', $page);

        $popularShows = $this->shows->getShows($filter = 'popular', $page);
        $nowAiringShows = $this->shows->getShows($filter = 'airing_today', $page);
        $onTheAirShows = $this->shows->getShows($filter = 'on_the_air', $page);
        $topShows = $this->shows->getShows($filter = 'top_rated', $page);

        $data = [
            'trending' => $trending['results'],
            'popular_movies' => $popularMovies['results'],
            'now_playing_movies' => $nowPlayingMovies['results'],
            'upcoming_movies' => $upcomingMovies['results'],
            'top_movies' => $topMovies['results'],
            'popular_shows' => $popularShows['results'],
            'airing_today_shows' => $nowAiringShows['results'],
            'on_the_air_shows' => $onTheAirShows['results'],
            'top_shows' => $topShows['results'],
        ];

        if (!is_dir($cacheDir)) {
            mkdir($cacheDir, 0755, true);
        }

        file_put_contents($cacheFile, json_encode($data));

        return $data;
    }
}

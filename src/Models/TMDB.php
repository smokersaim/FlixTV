<?php

namespace App\Models;

use GuzzleHttp\Exception\RequestException;

class TMDB
{
    protected $client;
    protected $apiKey;

    public function __construct() { 
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => 'https://api.themoviedb.org/3/',
            'timeout'  => 10.0,
        ]);
        $this->apiKey = $_ENV['TMDB_API'];
    }

    protected function fetchFromApi(string $apiURL, array $queryParams = []): array {
        try {
            $response = $this->client->request('GET', $apiURL, [
                'query' => array_merge([
                    'api_key' => $this->apiKey,
                    'language' => 'en-US'
                ], $queryParams)
            ]);

            $data = json_decode($response->getBody()->getContents(), true);

            if (!is_array($data)) {
                throw new \Exception("Unexpected data format");
            }

            return $data;

        } catch (RequestException $e) {
            throw new \Exception("HTTP Request failed: " . $e->getMessage());
        }
    }
}

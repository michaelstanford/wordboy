<?php namespace wordboy;

use GuzzleHttp\Client;

class Word
{

    private $word;
    private $client;

    public function __construct($word)
    {
        $this->word = $word;

        $this->client = new Client([
            'base_uri' => 'https://wordsapiv1.p.rapidapi.com/words/',
            'headers' => [
                "X-RapidAPI-Host" => "wordsapiv1.p.rapidapi.com",
                "X-RapidAPI-Key" => "YOUR API KEY"
            ]
        ]);
    }

    public function call(string $endpoint) {
        $response = $this->client->request('GET', $this->word . '/' . $endpoint);
        return $response->getBody();
    }
}
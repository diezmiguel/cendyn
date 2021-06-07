<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;

class ApiService
{
    private $api;

    public function __construct()
    {
        $this->api = new Client();
    }

    /**
     * Return a string quote.
     */
    public function getQuote(): ?string
    {
        try {
            $request = $this->api->get(env('QUOTE_URL'));
            $response = $request->getBody()->getContents();

            return $response;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            Log::error('Error getting quotes.'.$response->getBody->getContents());
        }
    }

    /**
     * Returns all posts by the user id.
     *
     * @re
     */
    public function getPostsByUser(int $userId): ?string
    {
        try {
            $request = $this->api->get(env('TYPICODE_URL').'?userId='.$userId);
            $response = $request->getBody()->getContents();

            return $response;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            Log::error('Error retriving posts by User.'.$response->getBody->getContents());
        }
    }
}

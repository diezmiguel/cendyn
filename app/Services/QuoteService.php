<?php

namespace App\Services;

class QuoteService
{
    /**
     * @var \App\Services\ApiService
     */
    protected $api;

    public function __construct(ApiService $apiService)
    {
        $this->api = $apiService;
    }

    public function getQuote(): string
    {
        return $this->api->getQuote();
    }
}

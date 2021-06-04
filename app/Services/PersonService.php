<?php

namespace App\Services;

class PersonService
{
    /**
     * @var \App\Services\ApiService
     */
    protected $api;

    public function __construct(ApiService $ApiService)
    {
        $this->api = $ApiService;
    }

    public function getUserPosts($userId = null): string
    {
        return $this->api->getPostsByUser($userId);
    }
}

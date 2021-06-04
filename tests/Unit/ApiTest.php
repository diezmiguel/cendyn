<?php

namespace Tests\Unit;

use GuzzleHttp\Exception\ClientException;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    protected $apiClient;

    public function setUp(): void
    {
        $this->apiClient = new \GuzzleHttp\Client();
        parent::setUp();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testIfErrorIsReturnedWhenLimitGreaterThan100()
    {
        try {
            $request = $this->apiClient->get('http://localhost:8000/api/person/index?limit=110');
            $response = $request->getBody()->getContents();
            $this->assertStringContainsString('400 Bad Request', $response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->assertEquals(400, $response->getStatusCode());
        }
    }

    public function testIfPersonListIsReturned()
    {
        try {
            $request = $this->apiClient->get('http://localhost:8000/api/person/index?limit=33');
            $response = $request->getBody()->getContents();
            $this->assertJson($response);
            $this->assertEquals(200, $request->getStatusCode());
        } catch (ClientException $e) {
        }
    }

    public function testIfQuotetIsReturned()
    {
        try {
            $request = $this->apiClient->get('http://localhost:8000/api/quote');
            $response = $request->getBody()->getContents();
            $this->assertJson($response);
            $this->assertEquals(200, $request->getStatusCode());
        } catch (ClientException $e) {
        }
    }
}

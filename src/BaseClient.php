<?php

namespace Xylis\MovieClientsContracts;

use Symfony\Contracts\HttpClient\HttpClientInterface;

abstract class BaseClient implements ClientInterface
{
    /** @var string */
    protected $apiKey;

    /** @var HttpClientInterface */
    protected $httpClient;

    /** @var string */
    protected $baseUrl;

    /**
     * @param string $apiKey
     * @param HttpClientInterface $httpClient
     */
    public function __construct(string $apiKey, HttpClientInterface $httpClient)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = $httpClient;
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }
}
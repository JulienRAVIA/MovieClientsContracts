<?php

namespace Xylis\MovieClientsContracts;

use Symfony\Contracts\HttpClient\HttpClientInterface;

interface ClientInterface
{
    /**
     * @param string $apiKey
     * @param HttpClientInterface $httpClient
     */
    public function __construct(string $apiKey, HttpClientInterface $httpClient);

    /**
     * @param string $method
     * @param string $callback
     * @param array $params
     * @return mixed
     */
    public function request(string $method, string $callback, array $params);

    /**
     * @return string
     */
    public function getApiKey(): string;

    /**
     * @return string
     */
    public function getBaseUrl(): string;
}
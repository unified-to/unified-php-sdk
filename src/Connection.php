<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Connection
{
    private SDKConfiguration $sdkConfiguration;

    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Create connection
     *
     * @param  \Unified\Unified_to\Models\Shared\Connection  $request
     * @return \Unified\Unified_to\Models\Operations\CreateUnifiedConnectionResponse
     */
    public function createUnifiedConnection(
        ?\Unified\Unified_to\Models\Shared\Connection $request,
    ): \Unified\Unified_to\Models\Operations\CreateUnifiedConnectionResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'request', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateUnifiedConnectionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->connection = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\Connection', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve connection
     *
     * @param  \Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedConnectionResponse
     */
    public function getUnifiedConnection(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedConnectionResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection/{id}', \Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedConnectionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->connection = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\Connection', 'json');
            }
        }

        return $response;
    }

    /**
     * List all connections
     *
     * @param  \Unified\Unified_to\Models\Operations\ListUnifiedConnectionsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListUnifiedConnectionsResponse
     */
    public function listUnifiedConnections(
        ?\Unified\Unified_to\Models\Operations\ListUnifiedConnectionsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListUnifiedConnectionsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListUnifiedConnectionsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListUnifiedConnectionsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->connections = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\Connection>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update connection
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionResponse
     */
    public function patchUnifiedConnection(
        ?\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection/{id}', \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'connection', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->connection = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\Connection', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove connection
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionResponse
     */
    public function removeUnifiedConnection(
        ?\Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection/{id}', \Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if (($httpResponse->getStatusCode() >= 200 && $httpResponse->getStatusCode() < 300)) {
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->string = $serializer->deserialize((string) $httpResponse->getBody(), 'string', 'json');
            }
        }

        return $response;
    }

    /**
     * Update connection
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionResponse
     */
    public function updateUnifiedConnection(
        ?\Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection/{id}', \Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'connection', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->connection = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\Connection', 'json');
            }
        }

        return $response;
    }
}
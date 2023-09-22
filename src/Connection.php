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
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Remove connection
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdResponse
     */
	public function deleteUnifiedConnectionId(
        ?\Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection/{id}', \Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->deleteUnifiedConnectionIdDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List all connections
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedConnectionResponse
     */
	public function getUnifiedConnection(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedConnectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedConnectionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->connections = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\Connection>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve connection
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedConnectionIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedConnectionIdResponse
     */
	public function getUnifiedConnectionId(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedConnectionIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedConnectionIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection/{id}', \Unified\Unified_to\Models\Operations\GetUnifiedConnectionIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedConnectionIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->connection = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\Connection', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update connection
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionIdResponse
     */
	public function patchUnifiedConnectionId(
        ?\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection/{id}', \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "connection", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->connection = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\Connection', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create connection
     * 
     * @param \Unified\Unified_to\Models\Shared\Connection $request
     * @return \Unified\Unified_to\Models\Operations\PostUnifiedConnectionResponse
     */
	public function postUnifiedConnection(
        ?\Unified\Unified_to\Models\Shared\Connection $request,
    ): \Unified\Unified_to\Models\Operations\PostUnifiedConnectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PostUnifiedConnectionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->connection = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\Connection', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update connection
     * 
     * @param \Unified\Unified_to\Models\Operations\PutUnifiedConnectionIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PutUnifiedConnectionIdResponse
     */
	public function putUnifiedConnectionId(
        ?\Unified\Unified_to\Models\Operations\PutUnifiedConnectionIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PutUnifiedConnectionIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection/{id}', \Unified\Unified_to\Models\Operations\PutUnifiedConnectionIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "connection", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutUnifiedConnectionIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->connection = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\Connection', 'json');
            }
        }

        return $response;
    }
}
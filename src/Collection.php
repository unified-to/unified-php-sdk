<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Collection 
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
     * Create a collection
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateCommerceCollectionRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateCommerceCollectionResponse
     */
	public function createCommerceCollection(
        ?\Unified\Unified_to\Models\Operations\CreateCommerceCollectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateCommerceCollectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/commerce/{connection_id}/collection', \Unified\Unified_to\Models\Operations\CreateCommerceCollectionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "commerceCollection", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateCommerceCollectionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->commerceCollection = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CommerceCollection', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a collection
     * 
     * @param \Unified\Unified_to\Models\Operations\GetCommerceCollectionRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetCommerceCollectionResponse
     */
	public function getCommerceCollection(
        ?\Unified\Unified_to\Models\Operations\GetCommerceCollectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetCommerceCollectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/commerce/{connection_id}/collection/{id}', \Unified\Unified_to\Models\Operations\GetCommerceCollectionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetCommerceCollectionRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetCommerceCollectionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->commerceCollection = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CommerceCollection', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all collections
     * 
     * @param \Unified\Unified_to\Models\Operations\ListCommerceCollectionsRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListCommerceCollectionsResponse
     */
	public function listCommerceCollections(
        ?\Unified\Unified_to\Models\Operations\ListCommerceCollectionsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListCommerceCollectionsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/commerce/{connection_id}/collection', \Unified\Unified_to\Models\Operations\ListCommerceCollectionsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListCommerceCollectionsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListCommerceCollectionsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->commerceCollections = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\CommerceCollection>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a collection
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchCommerceCollectionRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchCommerceCollectionResponse
     */
	public function patchCommerceCollection(
        ?\Unified\Unified_to\Models\Operations\PatchCommerceCollectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchCommerceCollectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/commerce/{connection_id}/collection/{id}', \Unified\Unified_to\Models\Operations\PatchCommerceCollectionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "commerceCollection", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchCommerceCollectionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->commerceCollection = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CommerceCollection', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove a collection
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveCommerceCollectionRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveCommerceCollectionResponse
     */
	public function removeCommerceCollection(
        ?\Unified\Unified_to\Models\Operations\RemoveCommerceCollectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveCommerceCollectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/commerce/{connection_id}/collection/{id}', \Unified\Unified_to\Models\Operations\RemoveCommerceCollectionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveCommerceCollectionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->string = $serializer->deserialize((string)$httpResponse->getBody(), 'string', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a collection
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateCommerceCollectionRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateCommerceCollectionResponse
     */
	public function updateCommerceCollection(
        ?\Unified\Unified_to\Models\Operations\UpdateCommerceCollectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateCommerceCollectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/commerce/{connection_id}/collection/{id}', \Unified\Unified_to\Models\Operations\UpdateCommerceCollectionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "commerceCollection", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateCommerceCollectionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->commerceCollection = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CommerceCollection', 'json');
            }
        }

        return $response;
    }
}
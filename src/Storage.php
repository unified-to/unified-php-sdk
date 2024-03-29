<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Storage 
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
     * Create a file
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateStorageFileRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateStorageFileResponse
     */
	public function createStorageFile(
        ?\Unified\Unified_to\Models\Operations\CreateStorageFileRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateStorageFileResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/storage/{connection_id}/file', \Unified\Unified_to\Models\Operations\CreateStorageFileRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "storageFile", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateStorageFileResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->storageFile = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\StorageFile', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a file
     * 
     * @param \Unified\Unified_to\Models\Operations\GetStorageFileRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetStorageFileResponse
     */
	public function getStorageFile(
        ?\Unified\Unified_to\Models\Operations\GetStorageFileRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetStorageFileResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/storage/{connection_id}/file/{id}', \Unified\Unified_to\Models\Operations\GetStorageFileRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetStorageFileRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetStorageFileResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->storageFile = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\StorageFile', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all files
     * 
     * @param \Unified\Unified_to\Models\Operations\ListStorageFilesRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListStorageFilesResponse
     */
	public function listStorageFiles(
        ?\Unified\Unified_to\Models\Operations\ListStorageFilesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListStorageFilesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/storage/{connection_id}/file', \Unified\Unified_to\Models\Operations\ListStorageFilesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListStorageFilesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListStorageFilesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->storageFiles = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\StorageFile>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a file
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchStorageFileRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchStorageFileResponse
     */
	public function patchStorageFile(
        ?\Unified\Unified_to\Models\Operations\PatchStorageFileRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchStorageFileResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/storage/{connection_id}/file/{id}', \Unified\Unified_to\Models\Operations\PatchStorageFileRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "storageFile", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchStorageFileResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->storageFile = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\StorageFile', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove a file
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveStorageFileRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveStorageFileResponse
     */
	public function removeStorageFile(
        ?\Unified\Unified_to\Models\Operations\RemoveStorageFileRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveStorageFileResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/storage/{connection_id}/file/{id}', \Unified\Unified_to\Models\Operations\RemoveStorageFileRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveStorageFileResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (($httpResponse->getStatusCode() >= 200 && $httpResponse->getStatusCode() < 300)) {
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->string = $serializer->deserialize((string)$httpResponse->getBody(), 'string', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a file
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateStorageFileRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateStorageFileResponse
     */
	public function updateStorageFile(
        ?\Unified\Unified_to\Models\Operations\UpdateStorageFileRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateStorageFileResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/storage/{connection_id}/file/{id}', \Unified\Unified_to\Models\Operations\UpdateStorageFileRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "storageFile", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateStorageFileResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->storageFile = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\StorageFile', 'json');
            }
        }

        return $response;
    }
}
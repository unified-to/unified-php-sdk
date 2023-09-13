<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Employee 
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
     * Remove a Employee
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdRequest $request
     * @param \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdSecurity $security
     * @return \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdResponse
     */
	public function deleteHrisConnectionIdEmployeeId(
        ?\Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdRequest $request,
        \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdSecurity $security,
    ): \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee/{id}', \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->deleteHrisConnectionIdEmployeeIdDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List all Employees
     * 
     * @param \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeRequest $request
     * @param \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeSecurity $security
     * @return \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeResponse
     */
	public function getHrisConnectionIdEmployee(
        ?\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeRequest $request,
        \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeSecurity $security,
    ): \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee', \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisEmployees = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\HrisEmployee>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a Employee
     * 
     * @param \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdRequest $request
     * @param \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdSecurity $security
     * @return \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdResponse
     */
	public function getHrisConnectionIdEmployeeId(
        ?\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdRequest $request,
        \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdSecurity $security,
    ): \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee/{id}', \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisEmployee = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisEmployee', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a Employee
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdRequest $request
     * @param \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdSecurity $security
     * @return \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdResponse
     */
	public function patchHrisConnectionIdEmployeeId(
        ?\Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdRequest $request,
        \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdSecurity $security,
    ): \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee/{id}', \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisEmployee", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisEmployee = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisEmployee', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a Employee
     * 
     * @param \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeRequest $request
     * @param \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeSecurity $security
     * @return \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeResponse
     */
	public function postHrisConnectionIdEmployee(
        ?\Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeRequest $request,
        \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeSecurity $security,
    ): \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee', \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisEmployee", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisEmployee = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisEmployee', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a Employee
     * 
     * @param \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdRequest $request
     * @param \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdSecurity $security
     * @return \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdResponse
     */
	public function putHrisConnectionIdEmployeeId(
        ?\Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdRequest $request,
        \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdSecurity $security,
    ): \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee/{id}', \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisEmployee", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisEmployee = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisEmployee', 'json');
            }
        }

        return $response;
    }
}
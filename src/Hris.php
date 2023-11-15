<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Hris 
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
     * Create an employee
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateHrisEmployeeRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateHrisEmployeeResponse
     */
	public function createHrisEmployee(
        ?\Unified\Unified_to\Models\Operations\CreateHrisEmployeeRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateHrisEmployeeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee', \Unified\Unified_to\Models\Operations\CreateHrisEmployeeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisEmployee", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateHrisEmployeeResponse();
        $response->statusCode = $statusCode;
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
     * Create a group
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateHrisGroupRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateHrisGroupResponse
     */
	public function createHrisGroup(
        ?\Unified\Unified_to\Models\Operations\CreateHrisGroupRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateHrisGroupResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/group', \Unified\Unified_to\Models\Operations\CreateHrisGroupRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisGroup", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateHrisGroupResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisGroup = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisGroup', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve an employee
     * 
     * @param \Unified\Unified_to\Models\Operations\GetHrisEmployeeRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetHrisEmployeeResponse
     */
	public function getHrisEmployee(
        ?\Unified\Unified_to\Models\Operations\GetHrisEmployeeRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetHrisEmployeeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee/{id}', \Unified\Unified_to\Models\Operations\GetHrisEmployeeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetHrisEmployeeRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetHrisEmployeeResponse();
        $response->statusCode = $statusCode;
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
     * Retrieve a group
     * 
     * @param \Unified\Unified_to\Models\Operations\GetHrisGroupRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetHrisGroupResponse
     */
	public function getHrisGroup(
        ?\Unified\Unified_to\Models\Operations\GetHrisGroupRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetHrisGroupResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/group/{id}', \Unified\Unified_to\Models\Operations\GetHrisGroupRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetHrisGroupRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetHrisGroupResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisGroup = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisGroup', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all employees
     * 
     * @param \Unified\Unified_to\Models\Operations\ListHrisEmployeesRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListHrisEmployeesResponse
     */
	public function listHrisEmployees(
        ?\Unified\Unified_to\Models\Operations\ListHrisEmployeesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListHrisEmployeesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee', \Unified\Unified_to\Models\Operations\ListHrisEmployeesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListHrisEmployeesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListHrisEmployeesResponse();
        $response->statusCode = $statusCode;
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
     * List all groups
     * 
     * @param \Unified\Unified_to\Models\Operations\ListHrisGroupsRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListHrisGroupsResponse
     */
	public function listHrisGroups(
        ?\Unified\Unified_to\Models\Operations\ListHrisGroupsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListHrisGroupsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/group', \Unified\Unified_to\Models\Operations\ListHrisGroupsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListHrisGroupsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListHrisGroupsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisGroups = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\HrisGroup>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update an employee
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchHrisEmployeeRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchHrisEmployeeResponse
     */
	public function patchHrisEmployee(
        ?\Unified\Unified_to\Models\Operations\PatchHrisEmployeeRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchHrisEmployeeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee/{id}', \Unified\Unified_to\Models\Operations\PatchHrisEmployeeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisEmployee", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchHrisEmployeeResponse();
        $response->statusCode = $statusCode;
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
     * Update a group
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchHrisGroupRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchHrisGroupResponse
     */
	public function patchHrisGroup(
        ?\Unified\Unified_to\Models\Operations\PatchHrisGroupRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchHrisGroupResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/group/{id}', \Unified\Unified_to\Models\Operations\PatchHrisGroupRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisGroup", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchHrisGroupResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisGroup = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisGroup', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove an employee
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveHrisEmployeeRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveHrisEmployeeResponse
     */
	public function removeHrisEmployee(
        ?\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveHrisEmployeeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee/{id}', \Unified\Unified_to\Models\Operations\RemoveHrisEmployeeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveHrisEmployeeResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->res = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Remove a group
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveHrisGroupRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveHrisGroupResponse
     */
	public function removeHrisGroup(
        ?\Unified\Unified_to\Models\Operations\RemoveHrisGroupRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveHrisGroupResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/group/{id}', \Unified\Unified_to\Models\Operations\RemoveHrisGroupRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveHrisGroupResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->res = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Update an employee
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateHrisEmployeeRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateHrisEmployeeResponse
     */
	public function updateHrisEmployee(
        ?\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateHrisEmployeeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee/{id}', \Unified\Unified_to\Models\Operations\UpdateHrisEmployeeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisEmployee", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateHrisEmployeeResponse();
        $response->statusCode = $statusCode;
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
     * Update a group
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateHrisGroupRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateHrisGroupResponse
     */
	public function updateHrisGroup(
        ?\Unified\Unified_to\Models\Operations\UpdateHrisGroupRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateHrisGroupResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/group/{id}', \Unified\Unified_to\Models\Operations\UpdateHrisGroupRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisGroup", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateHrisGroupResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisGroup = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisGroup', 'json');
            }
        }

        return $response;
    }
}
<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Martech 
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
     * Create a list
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateMartechListRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateMartechListResponse
     */
	public function createMartechList(
        ?\Unified\Unified_to\Models\Operations\CreateMartechListRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateMartechListResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/list', \Unified\Unified_to\Models\Operations\CreateMartechListRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "marketingList", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateMartechListResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->marketingList = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\MarketingList', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a member
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateMartechMemberRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateMartechMemberResponse
     */
	public function createMartechMember(
        ?\Unified\Unified_to\Models\Operations\CreateMartechMemberRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateMartechMemberResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/member', \Unified\Unified_to\Models\Operations\CreateMartechMemberRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "marketingMember", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateMartechMemberResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->marketingMember = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\MarketingMember', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a list
     * 
     * @param \Unified\Unified_to\Models\Operations\GetMartechListRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetMartechListResponse
     */
	public function getMartechList(
        ?\Unified\Unified_to\Models\Operations\GetMartechListRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetMartechListResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/list/{id}', \Unified\Unified_to\Models\Operations\GetMartechListRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetMartechListRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetMartechListResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->marketingList = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\MarketingList', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a member
     * 
     * @param \Unified\Unified_to\Models\Operations\GetMartechMemberRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetMartechMemberResponse
     */
	public function getMartechMember(
        ?\Unified\Unified_to\Models\Operations\GetMartechMemberRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetMartechMemberResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/member/{id}', \Unified\Unified_to\Models\Operations\GetMartechMemberRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetMartechMemberRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetMartechMemberResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->marketingMember = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\MarketingMember', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all lists
     * 
     * @param \Unified\Unified_to\Models\Operations\ListMartechListsRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListMartechListsResponse
     */
	public function listMartechLists(
        ?\Unified\Unified_to\Models\Operations\ListMartechListsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListMartechListsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/list', \Unified\Unified_to\Models\Operations\ListMartechListsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListMartechListsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListMartechListsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->marketingLists = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\MarketingList>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all members
     * 
     * @param \Unified\Unified_to\Models\Operations\ListMartechMembersRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListMartechMembersResponse
     */
	public function listMartechMembers(
        ?\Unified\Unified_to\Models\Operations\ListMartechMembersRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListMartechMembersResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/member', \Unified\Unified_to\Models\Operations\ListMartechMembersRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListMartechMembersRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListMartechMembersResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->marketingMembers = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\MarketingMember>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a list
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchMartechListRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchMartechListResponse
     */
	public function patchMartechList(
        ?\Unified\Unified_to\Models\Operations\PatchMartechListRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchMartechListResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/list/{id}', \Unified\Unified_to\Models\Operations\PatchMartechListRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "marketingList", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchMartechListResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->marketingList = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\MarketingList', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a member
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchMartechMemberRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchMartechMemberResponse
     */
	public function patchMartechMember(
        ?\Unified\Unified_to\Models\Operations\PatchMartechMemberRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchMartechMemberResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/member/{id}', \Unified\Unified_to\Models\Operations\PatchMartechMemberRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "marketingMember", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchMartechMemberResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->marketingMember = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\MarketingMember', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove a list
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveMartechListRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveMartechListResponse
     */
	public function removeMartechList(
        ?\Unified\Unified_to\Models\Operations\RemoveMartechListRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveMartechListResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/list/{id}', \Unified\Unified_to\Models\Operations\RemoveMartechListRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveMartechListResponse();
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
     * Remove member
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveMartechMemberRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveMartechMemberResponse
     */
	public function removeMartechMember(
        ?\Unified\Unified_to\Models\Operations\RemoveMartechMemberRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveMartechMemberResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/member/{id}', \Unified\Unified_to\Models\Operations\RemoveMartechMemberRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveMartechMemberResponse();
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
     * Update a list
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateMartechListRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateMartechListResponse
     */
	public function updateMartechList(
        ?\Unified\Unified_to\Models\Operations\UpdateMartechListRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateMartechListResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/list/{id}', \Unified\Unified_to\Models\Operations\UpdateMartechListRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "marketingList", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateMartechListResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->marketingList = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\MarketingList', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a member
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateMartechMemberRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateMartechMemberResponse
     */
	public function updateMartechMember(
        ?\Unified\Unified_to\Models\Operations\UpdateMartechMemberRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateMartechMemberResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/member/{id}', \Unified\Unified_to\Models\Operations\UpdateMartechMemberRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "marketingMember", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateMartechMemberResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->marketingMember = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\MarketingMember', 'json');
            }
        }

        return $response;
    }
}
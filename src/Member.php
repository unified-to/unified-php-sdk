<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Member 
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
     * Create a member in a list
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateMartechMemberRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateMartechMemberResponse
     */
	public function createMartechMember(
        ?\Unified\Unified_to\Models\Operations\CreateMartechMemberRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateMartechMemberResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/{list_id}/member', \Unified\Unified_to\Models\Operations\CreateMartechMemberRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "marketingMember", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\CreateMartechMemberRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\CreateMartechMemberResponse();
        $response->statusCode = $httpResponse->getStatusCode();
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
     * Retrieve a member from a list
     * 
     * @param \Unified\Unified_to\Models\Operations\GetMartechMemberRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetMartechMemberResponse
     */
	public function getMartechMember(
        ?\Unified\Unified_to\Models\Operations\GetMartechMemberRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetMartechMemberResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/{list_id}/member/{id}', \Unified\Unified_to\Models\Operations\GetMartechMemberRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetMartechMemberRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetMartechMemberResponse();
        $response->statusCode = $httpResponse->getStatusCode();
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
     * List all members in a list
     * 
     * @param \Unified\Unified_to\Models\Operations\ListMartechMembersRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListMartechMembersResponse
     */
	public function listMartechMembers(
        ?\Unified\Unified_to\Models\Operations\ListMartechMembersRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListMartechMembersResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/{list_id}/member', \Unified\Unified_to\Models\Operations\ListMartechMembersRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListMartechMembersRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\ListMartechMembersResponse();
        $response->statusCode = $httpResponse->getStatusCode();
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
     * Update a member in a list
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchMartechMemberRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchMartechMemberResponse
     */
	public function patchMartechMember(
        ?\Unified\Unified_to\Models\Operations\PatchMartechMemberRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchMartechMemberResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/{list_id}/member/{id}', \Unified\Unified_to\Models\Operations\PatchMartechMemberRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "marketingMember", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\PatchMartechMemberRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchMartechMemberResponse();
        $response->statusCode = $httpResponse->getStatusCode();
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
     * Remove member from a list
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveMartechMemberRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveMartechMemberResponse
     */
	public function removeMartechMember(
        ?\Unified\Unified_to\Models\Operations\RemoveMartechMemberRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveMartechMemberResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/{list_id}/member/{id}', \Unified\Unified_to\Models\Operations\RemoveMartechMemberRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\RemoveMartechMemberResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->removeMartechMemberDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Update a member in a list
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateMartechMemberRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateMartechMemberResponse
     */
	public function updateMartechMember(
        ?\Unified\Unified_to\Models\Operations\UpdateMartechMemberRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateMartechMemberResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/martech/{connection_id}/{list_id}/member/{id}', \Unified\Unified_to\Models\Operations\UpdateMartechMemberRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "marketingMember", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\UpdateMartechMemberRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\UpdateMartechMemberResponse();
        $response->statusCode = $httpResponse->getStatusCode();
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
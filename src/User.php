<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class User 
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
     * Remove a user
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdRequest $request
     * @param \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdSecurity $security
     * @return \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdResponse
     */
	public function deleteCrmConnectionIdUserId(
        ?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdRequest $request,
        \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdSecurity $security,
    ): \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/user/{id}', \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->deleteCrmConnectionIdUserIdDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Delete your user object
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteUnifiedUserSecurity $security
     * @return \Unified\Unified_to\Models\Operations\DeleteUnifiedUserResponse
     */
	public function deleteUnifiedUser(
        \Unified\Unified_to\Models\Operations\DeleteUnifiedUserSecurity $security,
    ): \Unified\Unified_to\Models\Operations\DeleteUnifiedUserResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/user');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteUnifiedUserResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->deleteUnifiedUserDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List all users
     * 
     * @param \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserRequest $request
     * @param \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserSecurity $security
     * @return \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserResponse
     */
	public function getCrmConnectionIdUser(
        ?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserRequest $request,
        \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserSecurity $security,
    ): \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/user', \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmUsers = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\CrmUser>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a user
     * 
     * @param \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdRequest $request
     * @param \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdSecurity $security
     * @return \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdResponse
     */
	public function getCrmConnectionIdUserId(
        ?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdRequest $request,
        \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdSecurity $security,
    ): \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/user/{id}', \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmUser = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmUser', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve your user object
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedUserSecurity $security
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedUserResponse
     */
	public function getUnifiedUser(
        \Unified\Unified_to\Models\Operations\GetUnifiedUserSecurity $security,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedUserResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/user');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedUserResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->user = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\User', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve your user token
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedUserTokenSecurity $security
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedUserTokenResponse
     */
	public function getUnifiedUserToken(
        \Unified\Unified_to\Models\Operations\GetUnifiedUserTokenSecurity $security,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedUserTokenResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/user/token');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedUserTokenResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->getUnifiedUserToken200ApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Update a user
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdRequest $request
     * @param \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdSecurity $security
     * @return \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdResponse
     */
	public function patchCrmConnectionIdUserId(
        ?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdRequest $request,
        \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdSecurity $security,
    ): \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/user/{id}', \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmUser", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmUser = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmUser', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Updates your user object
     * 
     * Only the name field is updated.
     * 
     * @param \Unified\Unified_to\Models\Shared\User $request
     * @param \Unified\Unified_to\Models\Operations\PatchUnifiedUserSecurity $security
     * @return \Unified\Unified_to\Models\Operations\PatchUnifiedUserResponse
     */
	public function patchUnifiedUser(
        ?\Unified\Unified_to\Models\Shared\User $request,
        \Unified\Unified_to\Models\Operations\PatchUnifiedUserSecurity $security,
    ): \Unified\Unified_to\Models\Operations\PatchUnifiedUserResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/user');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchUnifiedUserResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->user = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\User', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a user
     * 
     * @param \Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserRequest $request
     * @param \Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserSecurity $security
     * @return \Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserResponse
     */
	public function postCrmConnectionIdUser(
        ?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserRequest $request,
        \Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserSecurity $security,
    ): \Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/user', \Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmUser", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmUser = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmUser', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a user
     * 
     * @param \Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdRequest $request
     * @param \Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdSecurity $security
     * @return \Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdResponse
     */
	public function putCrmConnectionIdUserId(
        ?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdRequest $request,
        \Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdSecurity $security,
    ): \Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/user/{id}', \Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmUser", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmUser = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmUser', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Updates your user object
     * 
     * Only the name field is updated.
     * 
     * @param \Unified\Unified_to\Models\Shared\User $request
     * @param \Unified\Unified_to\Models\Operations\PutUnifiedUserSecurity $security
     * @return \Unified\Unified_to\Models\Operations\PutUnifiedUserResponse
     */
	public function putUnifiedUser(
        ?\Unified\Unified_to\Models\Shared\User $request,
        \Unified\Unified_to\Models\Operations\PutUnifiedUserSecurity $security,
    ): \Unified\Unified_to\Models\Operations\PutUnifiedUserResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/user');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutUnifiedUserResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->user = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\User', 'json');
            }
        }

        return $response;
    }
}
<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Team 
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
     * Remove a team
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdResponse
     */
	public function deleteCrmConnectionIdTeamId(
        ?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/team/{id}', \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->deleteCrmConnectionIdTeamIdDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List all teams
     * 
     * @param \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamResponse
     */
	public function getCrmConnectionIdTeam(
        ?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/team', \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmTeams = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\CrmTeam>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a team
     * 
     * @param \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdResponse
     */
	public function getCrmConnectionIdTeamId(
        ?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/team/{id}', \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmTeam = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmTeam', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a team
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdResponse
     */
	public function patchCrmConnectionIdTeamId(
        ?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/team/{id}', \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmTeam", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmTeam = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmTeam', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a team
     * 
     * @param \Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamRequest $request
     * @return \Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamResponse
     */
	public function postCrmConnectionIdTeam(
        ?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamRequest $request,
    ): \Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/team', \Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmTeam", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmTeam = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmTeam', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a team
     * 
     * @param \Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdResponse
     */
	public function putCrmConnectionIdTeamId(
        ?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/team/{id}', \Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmTeam", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmTeam = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmTeam', 'json');
            }
        }

        return $response;
    }
}
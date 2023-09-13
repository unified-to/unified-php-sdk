<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Auth 
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
     * Create connection indirectly
     * 
     * Returns an authorization URL for the specified integration.  Once a successful authorization occurs, a new connection is created.
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeResponse
     */
	public function getUnifiedIntegrationAuthWorkspaceIdIntegrationType(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration/auth/{workspace_id}/{integration_type}', \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->getUnifiedIntegrationAuthWorkspaceIdIntegrationType200ApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Sign in a user
     * 
     * Returns an authentication URL for the specified integration.  Once a successful authentication occurs, the name and emails are returned.
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeResponse
     */
	public function getUnifiedIntegrationLoginWorkspaceIdIntegrationType(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration/login/{workspace_id}/{integration_type}', \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->getUnifiedIntegrationLoginWorkspaceIdIntegrationType200ApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
}
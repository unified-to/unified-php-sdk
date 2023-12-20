<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Unified 
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
     * Create connection
     * 
     * @param \Unified\Unified_to\Models\Shared\Connection $request
     * @return \Unified\Unified_to\Models\Operations\CreateUnifiedConnectionResponse
     */
	public function createUnifiedConnection(
        ?\Unified\Unified_to\Models\Shared\Connection $request,
    ): \Unified\Unified_to\Models\Operations\CreateUnifiedConnectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateUnifiedConnectionResponse();
        $response->statusCode = $statusCode;
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
     * Retrieve specific API Call by its ID
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedApicallResponse
     */
	public function getUnifiedApicall(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedApicallResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/apicall/{id}', \Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedApicallResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiCall = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\ApiCall', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve connection
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedConnectionResponse
     */
	public function getUnifiedConnection(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedConnectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection/{id}', \Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedConnectionResponse();
        $response->statusCode = $statusCode;
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
     * Retrieve an integration
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationResponse
     */
	public function getUnifiedIntegration(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration/{integration_type}', \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->integration = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\Integration', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create connection indirectly
     * 
     * Returns an authorization URL for the specified integration.  Once a successful authorization occurs, a new connection is created.
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthResponse
     */
	public function getUnifiedIntegrationAuth(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration/auth/{workspace_id}/{integration_type}', \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthRequest::class, $request, null));
        $options['headers']['Accept'] = 'text/plain';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->res = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Retrieve webhook by its ID
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedWebhookResponse
     */
	public function getUnifiedWebhook(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedWebhookResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook/{id}', \Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedWebhookResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->webhook = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\Webhook', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Returns API Calls
     * 
     * @param \Unified\Unified_to\Models\Operations\ListUnifiedApicallsRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListUnifiedApicallsResponse
     */
	public function listUnifiedApicalls(
        ?\Unified\Unified_to\Models\Operations\ListUnifiedApicallsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListUnifiedApicallsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/apicall');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListUnifiedApicallsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListUnifiedApicallsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiCalls = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\ApiCall>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all connections
     * 
     * @param \Unified\Unified_to\Models\Operations\ListUnifiedConnectionsRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListUnifiedConnectionsResponse
     */
	public function listUnifiedConnections(
        ?\Unified\Unified_to\Models\Operations\ListUnifiedConnectionsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListUnifiedConnectionsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListUnifiedConnectionsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListUnifiedConnectionsResponse();
        $response->statusCode = $statusCode;
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
     * Returns all activated integrations in a workspace
     * 
     * No authentication required as this is to be used by front-end interface
     * 
     * @param \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesResponse
     */
	public function listUnifiedIntegrationWorkspaces(
        ?\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration/workspace/{workspace_id}', \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->integrations = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\Integration>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Returns all integrations
     * 
     * @param \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsResponse
     */
	public function listUnifiedIntegrations(
        ?\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->integrations = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\Integration>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Returns all registered webhooks
     * 
     * @param \Unified\Unified_to\Models\Operations\ListUnifiedWebhooksRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListUnifiedWebhooksResponse
     */
	public function listUnifiedWebhooks(
        ?\Unified\Unified_to\Models\Operations\ListUnifiedWebhooksRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListUnifiedWebhooksResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListUnifiedWebhooksRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListUnifiedWebhooksResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->webhooks = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\Webhook>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update connection
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionResponse
     */
	public function patchUnifiedConnection(
        ?\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection/{id}', \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "connection", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionResponse();
        $response->statusCode = $statusCode;
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
     * Remove connection
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionResponse
     */
	public function removeUnifiedConnection(
        ?\Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection/{id}', \Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionResponse();
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
     * Remove webhook subscription
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookResponse
     */
	public function removeUnifiedWebhook(
        ?\Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook/{id}', \Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookResponse();
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
     * Update connection
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionResponse
     */
	public function updateUnifiedConnection(
        ?\Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/connection/{id}', \Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "connection", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionResponse();
        $response->statusCode = $statusCode;
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
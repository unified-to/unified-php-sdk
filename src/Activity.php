<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Activity 
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
     * Create an activity
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateAtsActivityRequest $request
     * @param \Unified\Unified_to\Models\Operations\CreateAtsActivitySecurity $security
     * @return \Unified\Unified_to\Models\Operations\CreateAtsActivityResponse
     */
	public function createAtsActivity(
        ?\Unified\Unified_to\Models\Operations\CreateAtsActivityRequest $request,
        \Unified\Unified_to\Models\Operations\CreateAtsActivitySecurity $security,
    ): \Unified\Unified_to\Models\Operations\CreateAtsActivityResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/activity', \Unified\Unified_to\Models\Operations\CreateAtsActivityRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "atsActivity", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateAtsActivityResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsActivity = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsActivity', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve an activity
     * 
     * @param \Unified\Unified_to\Models\Operations\GetAtsActivityRequest $request
     * @param \Unified\Unified_to\Models\Operations\GetAtsActivitySecurity $security
     * @return \Unified\Unified_to\Models\Operations\GetAtsActivityResponse
     */
	public function getAtsActivity(
        ?\Unified\Unified_to\Models\Operations\GetAtsActivityRequest $request,
        \Unified\Unified_to\Models\Operations\GetAtsActivitySecurity $security,
    ): \Unified\Unified_to\Models\Operations\GetAtsActivityResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/activity/{id}', \Unified\Unified_to\Models\Operations\GetAtsActivityRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetAtsActivityRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetAtsActivityResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsActivity = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsActivity', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all activities
     * 
     * @param \Unified\Unified_to\Models\Operations\ListAtsActivitiesRequest $request
     * @param \Unified\Unified_to\Models\Operations\ListAtsActivitiesSecurity $security
     * @return \Unified\Unified_to\Models\Operations\ListAtsActivitiesResponse
     */
	public function listAtsActivities(
        ?\Unified\Unified_to\Models\Operations\ListAtsActivitiesRequest $request,
        \Unified\Unified_to\Models\Operations\ListAtsActivitiesSecurity $security,
    ): \Unified\Unified_to\Models\Operations\ListAtsActivitiesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/activity', \Unified\Unified_to\Models\Operations\ListAtsActivitiesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListAtsActivitiesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListAtsActivitiesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsActivities = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\AtsActivity>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update an activity
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchAtsActivityRequest $request
     * @param \Unified\Unified_to\Models\Operations\PatchAtsActivitySecurity $security
     * @return \Unified\Unified_to\Models\Operations\PatchAtsActivityResponse
     */
	public function patchAtsActivity(
        ?\Unified\Unified_to\Models\Operations\PatchAtsActivityRequest $request,
        \Unified\Unified_to\Models\Operations\PatchAtsActivitySecurity $security,
    ): \Unified\Unified_to\Models\Operations\PatchAtsActivityResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/activity/{id}', \Unified\Unified_to\Models\Operations\PatchAtsActivityRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "atsActivity", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchAtsActivityResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsActivity = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsActivity', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove an activity
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveAtsActivityRequest $request
     * @param \Unified\Unified_to\Models\Operations\RemoveAtsActivitySecurity $security
     * @return \Unified\Unified_to\Models\Operations\RemoveAtsActivityResponse
     */
	public function removeAtsActivity(
        ?\Unified\Unified_to\Models\Operations\RemoveAtsActivityRequest $request,
        \Unified\Unified_to\Models\Operations\RemoveAtsActivitySecurity $security,
    ): \Unified\Unified_to\Models\Operations\RemoveAtsActivityResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/activity/{id}', \Unified\Unified_to\Models\Operations\RemoveAtsActivityRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveAtsActivityResponse();
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
     * Update an activity
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateAtsActivityRequest $request
     * @param \Unified\Unified_to\Models\Operations\UpdateAtsActivitySecurity $security
     * @return \Unified\Unified_to\Models\Operations\UpdateAtsActivityResponse
     */
	public function updateAtsActivity(
        ?\Unified\Unified_to\Models\Operations\UpdateAtsActivityRequest $request,
        \Unified\Unified_to\Models\Operations\UpdateAtsActivitySecurity $security,
    ): \Unified\Unified_to\Models\Operations\UpdateAtsActivityResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/activity/{id}', \Unified\Unified_to\Models\Operations\UpdateAtsActivityRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "atsActivity", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateAtsActivityResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsActivity = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsActivity', 'json');
            }
        }

        return $response;
    }
}
<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Apicall 
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
     * Returns API Calls
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest $request
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedApicallSecurity $security
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedApicallResponse
     */
	public function getUnifiedApicall(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest $request,
        \Unified\Unified_to\Models\Operations\GetUnifiedApicallSecurity $security,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedApicallResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/apicall');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedApicallResponse();
        $response->statusCode = $httpResponse->getStatusCode();
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
     * Retrieve specific API Call by its ID
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedApicallIdRequest $request
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedApicallIdSecurity $security
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedApicallIdResponse
     */
	public function getUnifiedApicallId(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedApicallIdRequest $request,
        \Unified\Unified_to\Models\Operations\GetUnifiedApicallIdSecurity $security,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedApicallIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/apicall/{id}', \Unified\Unified_to\Models\Operations\GetUnifiedApicallIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedApicallIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
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
}
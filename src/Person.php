<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Person 
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
     * Retrieve enrichment information for a person
     * 
     * @param \Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonResponse
     */
	public function getEnrichConnectionIdPerson(
        ?\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/enrich/{connection_id}/person', \Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->enrichPerson = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\EnrichPerson', 'json');
            }
        }

        return $response;
    }
}
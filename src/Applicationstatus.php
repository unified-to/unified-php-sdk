<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Applicationstatus
{
    private SDKConfiguration $sdkConfiguration;

    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * List all applicationstatuses
     *
     * @param  \Unified\Unified_to\Models\Operations\ListAtsApplicationstatusesRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListAtsApplicationstatusesResponse
     */
    public function listAtsApplicationstatuses(
        ?\Unified\Unified_to\Models\Operations\ListAtsApplicationstatusesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListAtsApplicationstatusesResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/applicationstatus', \Unified\Unified_to\Models\Operations\ListAtsApplicationstatusesRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListAtsApplicationstatusesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListAtsApplicationstatusesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsStatuses = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\AtsStatus>', 'json');
            }
        }

        return $response;
    }
}
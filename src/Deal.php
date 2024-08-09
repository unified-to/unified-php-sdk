<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Deal
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
     * Create a deal
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateCrmDealRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateCrmDealResponse
     */
    public function createCrmDeal(
        ?\Unified\Unified_to\Models\Operations\CreateCrmDealRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateCrmDealResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/deal', \Unified\Unified_to\Models\Operations\CreateCrmDealRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'crmDeal', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateCrmDealResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmDeal = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmDeal', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a deal
     *
     * @param  \Unified\Unified_to\Models\Operations\GetCrmDealRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetCrmDealResponse
     */
    public function getCrmDeal(
        ?\Unified\Unified_to\Models\Operations\GetCrmDealRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetCrmDealResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/deal/{id}', \Unified\Unified_to\Models\Operations\GetCrmDealRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetCrmDealRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetCrmDealResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmDeal = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmDeal', 'json');
            }
        }

        return $response;
    }

    /**
     * List all deals
     *
     * @param  \Unified\Unified_to\Models\Operations\ListCrmDealsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListCrmDealsResponse
     */
    public function listCrmDeals(
        ?\Unified\Unified_to\Models\Operations\ListCrmDealsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListCrmDealsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/deal', \Unified\Unified_to\Models\Operations\ListCrmDealsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListCrmDealsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListCrmDealsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmDeals = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\CrmDeal>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a deal
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchCrmDealRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchCrmDealResponse
     */
    public function patchCrmDeal(
        ?\Unified\Unified_to\Models\Operations\PatchCrmDealRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchCrmDealResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/deal/{id}', \Unified\Unified_to\Models\Operations\PatchCrmDealRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'crmDeal', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchCrmDealResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmDeal = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmDeal', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove a deal
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveCrmDealRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveCrmDealResponse
     */
    public function removeCrmDeal(
        ?\Unified\Unified_to\Models\Operations\RemoveCrmDealRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveCrmDealResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/deal/{id}', \Unified\Unified_to\Models\Operations\RemoveCrmDealRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveCrmDealResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if (true) { /** @phpstan-ignore-line */
        }

        return $response;
    }

    /**
     * Update a deal
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateCrmDealRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateCrmDealResponse
     */
    public function updateCrmDeal(
        ?\Unified\Unified_to\Models\Operations\UpdateCrmDealRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateCrmDealResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/deal/{id}', \Unified\Unified_to\Models\Operations\UpdateCrmDealRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'crmDeal', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateCrmDealResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmDeal = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmDeal', 'json');
            }
        }

        return $response;
    }
}
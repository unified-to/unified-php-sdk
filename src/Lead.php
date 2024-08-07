<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Lead
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
     * Create a lead
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateCrmLeadRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateCrmLeadResponse
     */
    public function createCrmLead(
        ?\Unified\Unified_to\Models\Operations\CreateCrmLeadRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateCrmLeadResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/lead', \Unified\Unified_to\Models\Operations\CreateCrmLeadRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'crmLead', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateCrmLeadResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmLead = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmLead', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a lead
     *
     * @param  \Unified\Unified_to\Models\Operations\GetCrmLeadRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetCrmLeadResponse
     */
    public function getCrmLead(
        ?\Unified\Unified_to\Models\Operations\GetCrmLeadRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetCrmLeadResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/lead/{id}', \Unified\Unified_to\Models\Operations\GetCrmLeadRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetCrmLeadRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetCrmLeadResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmLead = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmLead', 'json');
            }
        }

        return $response;
    }

    /**
     * List all leads
     *
     * @param  \Unified\Unified_to\Models\Operations\ListCrmLeadsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListCrmLeadsResponse
     */
    public function listCrmLeads(
        ?\Unified\Unified_to\Models\Operations\ListCrmLeadsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListCrmLeadsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/lead', \Unified\Unified_to\Models\Operations\ListCrmLeadsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListCrmLeadsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListCrmLeadsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmLeads = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\CrmLead>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a lead
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchCrmLeadRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchCrmLeadResponse
     */
    public function patchCrmLead(
        ?\Unified\Unified_to\Models\Operations\PatchCrmLeadRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchCrmLeadResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/lead/{id}', \Unified\Unified_to\Models\Operations\PatchCrmLeadRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'crmLead', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchCrmLeadResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmLead = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmLead', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove a lead
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveCrmLeadRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveCrmLeadResponse
     */
    public function removeCrmLead(
        ?\Unified\Unified_to\Models\Operations\RemoveCrmLeadRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveCrmLeadResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/lead/{id}', \Unified\Unified_to\Models\Operations\RemoveCrmLeadRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveCrmLeadResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if (true) { /** @phpstan-ignore-line */
        }

        return $response;
    }

    /**
     * Update a lead
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateCrmLeadRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateCrmLeadResponse
     */
    public function updateCrmLead(
        ?\Unified\Unified_to\Models\Operations\UpdateCrmLeadRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateCrmLeadResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/lead/{id}', \Unified\Unified_to\Models\Operations\UpdateCrmLeadRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'crmLead', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateCrmLeadResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmLead = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmLead', 'json');
            }
        }

        return $response;
    }
}
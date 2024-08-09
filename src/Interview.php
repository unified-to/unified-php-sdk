<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Interview
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
     * Create an interview
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateAtsInterviewRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateAtsInterviewResponse
     */
    public function createAtsInterview(
        ?\Unified\Unified_to\Models\Operations\CreateAtsInterviewRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateAtsInterviewResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/interview', \Unified\Unified_to\Models\Operations\CreateAtsInterviewRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'atsInterview', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateAtsInterviewResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsInterview = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsInterview', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve an interview
     *
     * @param  \Unified\Unified_to\Models\Operations\GetAtsInterviewRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetAtsInterviewResponse
     */
    public function getAtsInterview(
        ?\Unified\Unified_to\Models\Operations\GetAtsInterviewRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetAtsInterviewResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/interview/{id}', \Unified\Unified_to\Models\Operations\GetAtsInterviewRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetAtsInterviewRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetAtsInterviewResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsInterview = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsInterview', 'json');
            }
        }

        return $response;
    }

    /**
     * List all interviews
     *
     * @param  \Unified\Unified_to\Models\Operations\ListAtsInterviewsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListAtsInterviewsResponse
     */
    public function listAtsInterviews(
        ?\Unified\Unified_to\Models\Operations\ListAtsInterviewsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListAtsInterviewsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/interview', \Unified\Unified_to\Models\Operations\ListAtsInterviewsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListAtsInterviewsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListAtsInterviewsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsInterviews = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\AtsInterview>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update an interview
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchAtsInterviewRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchAtsInterviewResponse
     */
    public function patchAtsInterview(
        ?\Unified\Unified_to\Models\Operations\PatchAtsInterviewRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchAtsInterviewResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/interview/{id}', \Unified\Unified_to\Models\Operations\PatchAtsInterviewRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'atsInterview', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchAtsInterviewResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsInterview = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsInterview', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove an interview
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveAtsInterviewRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveAtsInterviewResponse
     */
    public function removeAtsInterview(
        ?\Unified\Unified_to\Models\Operations\RemoveAtsInterviewRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveAtsInterviewResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/interview/{id}', \Unified\Unified_to\Models\Operations\RemoveAtsInterviewRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveAtsInterviewResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if (true) { /** @phpstan-ignore-line */
        }

        return $response;
    }

    /**
     * Update an interview
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateAtsInterviewRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateAtsInterviewResponse
     */
    public function updateAtsInterview(
        ?\Unified\Unified_to\Models\Operations\UpdateAtsInterviewRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateAtsInterviewResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/interview/{id}', \Unified\Unified_to\Models\Operations\UpdateAtsInterviewRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'atsInterview', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateAtsInterviewResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsInterview = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsInterview', 'json');
            }
        }

        return $response;
    }
}
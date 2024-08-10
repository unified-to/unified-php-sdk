<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

use JMS\Serializer\DeserializationContext;
use Unified\Unified_to\Models\Operations;

class Pipeline
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
     * Create a pipeline
     *
     * @param  Operations\CreateCrmPipelineRequest  $request
     * @return Operations\CreateCrmPipelineResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function createCrmPipeline(
        ?Operations\CreateCrmPipelineRequest $request,
    ): Operations\CreateCrmPipelineResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/pipeline', Operations\CreateCrmPipelineRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'crmPipeline', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\CrmPipeline', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CreateCrmPipelineResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    crmPipeline: $obj);

                return $response;
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Retrieve a pipeline
     *
     * @param  Operations\GetCrmPipelineRequest  $request
     * @return Operations\GetCrmPipelineResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function getCrmPipeline(
        ?Operations\GetCrmPipelineRequest $request,
    ): Operations\GetCrmPipelineResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/pipeline/{id}', Operations\GetCrmPipelineRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\GetCrmPipelineRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\CrmPipeline', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetCrmPipelineResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    crmPipeline: $obj);

                return $response;
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * List all pipelines
     *
     * @param  Operations\ListCrmPipelinesRequest  $request
     * @return Operations\ListCrmPipelinesResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function listCrmPipelines(
        ?Operations\ListCrmPipelinesRequest $request,
    ): Operations\ListCrmPipelinesResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/pipeline', Operations\ListCrmPipelinesRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\ListCrmPipelinesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'array<\Unified\Unified_to\Models\Shared\CrmPipeline>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\ListCrmPipelinesResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    crmPipelines: $obj);

                return $response;
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Update a pipeline
     *
     * @param  Operations\PatchCrmPipelineRequest  $request
     * @return Operations\PatchCrmPipelineResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function patchCrmPipeline(
        ?Operations\PatchCrmPipelineRequest $request,
    ): Operations\PatchCrmPipelineResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/pipeline/{id}', Operations\PatchCrmPipelineRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'crmPipeline', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('PATCH', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\CrmPipeline', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\PatchCrmPipelineResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    crmPipeline: $obj);

                return $response;
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Remove a pipeline
     *
     * @param  Operations\RemoveCrmPipelineRequest  $request
     * @return Operations\RemoveCrmPipelineResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function removeCrmPipeline(
        ?Operations\RemoveCrmPipelineRequest $request,
    ): Operations\RemoveCrmPipelineResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/pipeline/{id}', Operations\RemoveCrmPipelineRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('DELETE', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            return new Operations\RemoveCrmPipelineResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        }
    }

    /**
     * Update a pipeline
     *
     * @param  Operations\UpdateCrmPipelineRequest  $request
     * @return Operations\UpdateCrmPipelineResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function updateCrmPipeline(
        ?Operations\UpdateCrmPipelineRequest $request,
    ): Operations\UpdateCrmPipelineResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/pipeline/{id}', Operations\UpdateCrmPipelineRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'crmPipeline', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('PUT', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\CrmPipeline', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\UpdateCrmPipelineResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    crmPipeline: $obj);

                return $response;
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }
}
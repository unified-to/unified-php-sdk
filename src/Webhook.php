<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

use Speakeasy\Serializer\DeserializationContext;
use Unified\Unified_to\Models\Operations;

class Webhook
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(public SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Create webhook subscription
     *
     * The data payload received by your server is described at https://docs.unified.to/unified/overview. The `interval` field can be set as low as 1 minute for paid accounts, and 60 minutes for free accounts.
     *
     * @param  ?Operations\CreateUnifiedWebhookRequest  $request
     * @return Operations\CreateUnifiedWebhookResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function createUnifiedWebhook(?Operations\CreateUnifiedWebhookRequest $request = null): Operations\CreateUnifiedWebhookResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'webhook', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\CreateUnifiedWebhookRequest::class, $request));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\Webhook', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CreateUnifiedWebhookResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    webhook: $obj);

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
     * Retrieve webhook by its ID
     *
     * @param  Operations\GetUnifiedWebhookRequest  $request
     * @return Operations\GetUnifiedWebhookResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function getUnifiedWebhook(Operations\GetUnifiedWebhookRequest $request): Operations\GetUnifiedWebhookResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook/{id}', Operations\GetUnifiedWebhookRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\Webhook', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetUnifiedWebhookResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    webhook: $obj);

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
     * Returns all registered webhooks
     *
     * @param  ?Operations\ListUnifiedWebhooksRequest  $request
     * @return Operations\ListUnifiedWebhooksResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function listUnifiedWebhooks(?Operations\ListUnifiedWebhooksRequest $request = null): Operations\ListUnifiedWebhooksResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\ListUnifiedWebhooksRequest::class, $request));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'array<\Unified\Unified_to\Models\Shared\Webhook>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\ListUnifiedWebhooksResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    webhooks: $obj);

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
     * Update webhook subscription
     *
     * @param  Operations\PatchUnifiedWebhookRequest  $request
     * @return Operations\PatchUnifiedWebhookResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function patchUnifiedWebhook(Operations\PatchUnifiedWebhookRequest $request): Operations\PatchUnifiedWebhookResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook/{id}', Operations\PatchUnifiedWebhookRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'webhook', 'json');
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
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\Webhook', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\PatchUnifiedWebhookResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    webhook: $obj);

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
     * Trigger webhook
     *
     * @param  Operations\PatchUnifiedWebhookTriggerRequest  $request
     * @return Operations\PatchUnifiedWebhookTriggerResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function patchUnifiedWebhookTrigger(Operations\PatchUnifiedWebhookTriggerRequest $request): Operations\PatchUnifiedWebhookTriggerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook/{id}/trigger', Operations\PatchUnifiedWebhookTriggerRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('PATCH', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            return new Operations\PatchUnifiedWebhookTriggerResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        }
    }

    /**
     * Remove webhook subscription
     *
     * @param  Operations\RemoveUnifiedWebhookRequest  $request
     * @return Operations\RemoveUnifiedWebhookResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function removeUnifiedWebhook(Operations\RemoveUnifiedWebhookRequest $request): Operations\RemoveUnifiedWebhookResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook/{id}', Operations\RemoveUnifiedWebhookRequest::class, $request);
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
            return new Operations\RemoveUnifiedWebhookResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        }
    }

    /**
     * Update webhook subscription
     *
     * @param  Operations\UpdateUnifiedWebhookRequest  $request
     * @return Operations\UpdateUnifiedWebhookResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function updateUnifiedWebhook(Operations\UpdateUnifiedWebhookRequest $request): Operations\UpdateUnifiedWebhookResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook/{id}', Operations\UpdateUnifiedWebhookRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'webhook', 'json');
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
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\Webhook', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\UpdateUnifiedWebhookResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    webhook: $obj);

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
     * Trigger webhook
     *
     * @param  Operations\UpdateUnifiedWebhookTriggerRequest  $request
     * @return Operations\UpdateUnifiedWebhookTriggerResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function updateUnifiedWebhookTrigger(Operations\UpdateUnifiedWebhookTriggerRequest $request): Operations\UpdateUnifiedWebhookTriggerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook/{id}/trigger', Operations\UpdateUnifiedWebhookTriggerRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('PUT', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            return new Operations\UpdateUnifiedWebhookTriggerResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        }
    }

}
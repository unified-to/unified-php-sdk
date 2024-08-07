<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Message
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
     * Create a message
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateMessagingMessageRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateMessagingMessageResponse
     */
    public function createMessagingMessage(
        ?\Unified\Unified_to\Models\Operations\CreateMessagingMessageRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateMessagingMessageResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/messaging/{connection_id}/message', \Unified\Unified_to\Models\Operations\CreateMessagingMessageRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'messagingMessage', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateMessagingMessageResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->messagingMessage = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\MessagingMessage', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a message
     *
     * @param  \Unified\Unified_to\Models\Operations\GetMessagingMessageRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetMessagingMessageResponse
     */
    public function getMessagingMessage(
        ?\Unified\Unified_to\Models\Operations\GetMessagingMessageRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetMessagingMessageResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/messaging/{connection_id}/message/{id}', \Unified\Unified_to\Models\Operations\GetMessagingMessageRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetMessagingMessageRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetMessagingMessageResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->messagingMessage = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\MessagingMessage', 'json');
            }
        }

        return $response;
    }

    /**
     * List all messages
     *
     * @param  \Unified\Unified_to\Models\Operations\ListMessagingMessagesRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListMessagingMessagesResponse
     */
    public function listMessagingMessages(
        ?\Unified\Unified_to\Models\Operations\ListMessagingMessagesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListMessagingMessagesResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/messaging/{connection_id}/message', \Unified\Unified_to\Models\Operations\ListMessagingMessagesRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListMessagingMessagesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListMessagingMessagesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->messagingMessages = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\MessagingMessage>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a message
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchMessagingMessageRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchMessagingMessageResponse
     */
    public function patchMessagingMessage(
        ?\Unified\Unified_to\Models\Operations\PatchMessagingMessageRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchMessagingMessageResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/messaging/{connection_id}/message/{id}', \Unified\Unified_to\Models\Operations\PatchMessagingMessageRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'messagingMessage', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchMessagingMessageResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->messagingMessage = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\MessagingMessage', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove a message
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveMessagingMessageRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveMessagingMessageResponse
     */
    public function removeMessagingMessage(
        ?\Unified\Unified_to\Models\Operations\RemoveMessagingMessageRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveMessagingMessageResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/messaging/{connection_id}/message/{id}', \Unified\Unified_to\Models\Operations\RemoveMessagingMessageRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveMessagingMessageResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if (true) { /** @phpstan-ignore-line */
        }

        return $response;
    }

    /**
     * Update a message
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateMessagingMessageRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateMessagingMessageResponse
     */
    public function updateMessagingMessage(
        ?\Unified\Unified_to\Models\Operations\UpdateMessagingMessageRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateMessagingMessageResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/messaging/{connection_id}/message/{id}', \Unified\Unified_to\Models\Operations\UpdateMessagingMessageRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'messagingMessage', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateMessagingMessageResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->messagingMessage = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\MessagingMessage', 'json');
            }
        }

        return $response;
    }
}
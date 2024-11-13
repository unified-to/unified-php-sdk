<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

use Speakeasy\Serializer\DeserializationContext;
use Unified\Unified_to\Models\Operations;

class User
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
     * Create user
     *
     * @param  Operations\CreateScimUsersRequest  $request
     * @return Operations\CreateScimUsersResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function createScimUsers(Operations\CreateScimUsersRequest $request): Operations\CreateScimUsersResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/scim/{connection_id}/users', Operations\CreateScimUsersRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'scimUser', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\CreateScimUsersRequest::class, $request));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\ScimUser', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CreateScimUsersResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    scimUser: $obj);

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
     * Get user
     *
     * @param  Operations\GetScimUsersRequest  $request
     * @return Operations\GetScimUsersResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function getScimUsers(Operations\GetScimUsersRequest $request): Operations\GetScimUsersResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/scim/{connection_id}/users/{id}', Operations\GetScimUsersRequest::class, $request);
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
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\ScimUser', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetScimUsersResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    scimUser: $obj);

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
     * List users
     *
     * @param  Operations\ListScimUsersRequest  $request
     * @return Operations\ListScimUsersResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function listScimUsers(Operations\ListScimUsersRequest $request): Operations\ListScimUsersResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/scim/{connection_id}/users', Operations\ListScimUsersRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\ListScimUsersRequest::class, $request));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'array<\Unified\Unified_to\Models\Shared\ScimUser>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\ListScimUsersResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    scimUsers: $obj);

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
     * Update user
     *
     * @param  Operations\PatchScimUsersRequest  $request
     * @return Operations\PatchScimUsersResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function patchScimUsers(Operations\PatchScimUsersRequest $request): Operations\PatchScimUsersResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/scim/{connection_id}/users/{id}', Operations\PatchScimUsersRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'scimUser', 'json');
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
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\ScimUser', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\PatchScimUsersResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    scimUser: $obj);

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
     * Delete user
     *
     * @param  Operations\RemoveScimUsersRequest  $request
     * @return Operations\RemoveScimUsersResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function removeScimUsers(Operations\RemoveScimUsersRequest $request): Operations\RemoveScimUsersResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/scim/{connection_id}/users/{id}', Operations\RemoveScimUsersRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('DELETE', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            return new Operations\RemoveScimUsersResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            return new Operations\RemoveScimUsersResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        }
    }

    /**
     * Update user
     *
     * @param  Operations\UpdateScimUsersRequest  $request
     * @return Operations\UpdateScimUsersResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function updateScimUsers(Operations\UpdateScimUsersRequest $request): Operations\UpdateScimUsersResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/scim/{connection_id}/users/{id}', Operations\UpdateScimUsersRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'scimUser', 'json');
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
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\ScimUser', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\UpdateScimUsersResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    scimUser: $obj);

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
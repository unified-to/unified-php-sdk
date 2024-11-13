<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

use Speakeasy\Serializer\DeserializationContext;
use Unified\Unified_to\Models\Operations;

class Passthrough
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
     * Passthrough POST
     *
     * @param  Operations\CreatePassthroughJsonRequest  $request
     * @return Operations\CreatePassthroughJsonResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function createPassthroughJson(Operations\CreatePassthroughJsonRequest $request): Operations\CreatePassthroughJsonResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/passthrough/{connection_id}/{path}', Operations\CreatePassthroughJsonRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json;q=1, text/csv;q=0.8, text/plain;q=0.6, application/xml;q=0.4, */*;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (in_array($statusCode, [204, 205, 304])) {
            return new Operations\CreatePassthroughJsonResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, '*/*')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\CreatePassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultWildcardWildcardBytes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'mixed', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CreatePassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationJsonAny: $obj);

                return $response;
            } elseif (Utils\Utils::matchContentType($contentType, 'application/xml')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\CreatePassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationXmlRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/csv')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\CreatePassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextCsvRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\CreatePassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextPlainRes: $obj);
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Passthrough POST
     *
     * @param  Operations\CreatePassthroughRawRequest  $request
     * @return Operations\CreatePassthroughRawResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function createPassthroughRaw(Operations\CreatePassthroughRawRequest $request): Operations\CreatePassthroughRawResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/passthrough/{connection_id}/{path}', Operations\CreatePassthroughRawRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'raw');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json;q=1, text/csv;q=0.8, text/plain;q=0.6, application/xml;q=0.4, */*;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (in_array($statusCode, [204, 205, 304])) {
            return new Operations\CreatePassthroughRawResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, '*/*')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\CreatePassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultWildcardWildcardBytes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'mixed', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CreatePassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationJsonAny: $obj);

                return $response;
            } elseif (Utils\Utils::matchContentType($contentType, 'application/xml')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\CreatePassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationXmlRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/csv')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\CreatePassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextCsvRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\CreatePassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextPlainRes: $obj);
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Passthrough GET
     *
     * @param  Operations\ListPassthroughsRequest  $request
     * @return Operations\ListPassthroughsResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function listPassthroughs(Operations\ListPassthroughsRequest $request): Operations\ListPassthroughsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/passthrough/{connection_id}/{path}', Operations\ListPassthroughsRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, text/csv;q=0.8, text/plain;q=0.6, application/xml;q=0.4, */*;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (in_array($statusCode, [204, 205, 304])) {
            return new Operations\ListPassthroughsResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, '*/*')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\ListPassthroughsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultWildcardWildcardBytes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'mixed', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\ListPassthroughsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationJsonAny: $obj);

                return $response;
            } elseif (Utils\Utils::matchContentType($contentType, 'application/xml')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\ListPassthroughsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationXmlRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/csv')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\ListPassthroughsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextCsvRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\ListPassthroughsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextPlainRes: $obj);
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Passthrough PUT
     *
     * @param  Operations\PatchPassthroughJsonRequest  $request
     * @return Operations\PatchPassthroughJsonResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function patchPassthroughJson(Operations\PatchPassthroughJsonRequest $request): Operations\PatchPassthroughJsonResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/passthrough/{connection_id}/{path}', Operations\PatchPassthroughJsonRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json;q=1, text/csv;q=0.8, text/plain;q=0.6, application/xml;q=0.4, */*;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('PATCH', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (in_array($statusCode, [204, 205, 304])) {
            return new Operations\PatchPassthroughJsonResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, '*/*')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\PatchPassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultWildcardWildcardBytes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'mixed', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\PatchPassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationJsonAny: $obj);

                return $response;
            } elseif (Utils\Utils::matchContentType($contentType, 'application/xml')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\PatchPassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationXmlRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/csv')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\PatchPassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextCsvRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\PatchPassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextPlainRes: $obj);
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Passthrough PUT
     *
     * @param  Operations\PatchPassthroughRawRequest  $request
     * @return Operations\PatchPassthroughRawResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function patchPassthroughRaw(Operations\PatchPassthroughRawRequest $request): Operations\PatchPassthroughRawResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/passthrough/{connection_id}/{path}', Operations\PatchPassthroughRawRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'raw');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json;q=1, text/csv;q=0.8, text/plain;q=0.6, application/xml;q=0.4, */*;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('PATCH', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (in_array($statusCode, [204, 205, 304])) {
            return new Operations\PatchPassthroughRawResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, '*/*')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\PatchPassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultWildcardWildcardBytes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'mixed', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\PatchPassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationJsonAny: $obj);

                return $response;
            } elseif (Utils\Utils::matchContentType($contentType, 'application/xml')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\PatchPassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationXmlRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/csv')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\PatchPassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextCsvRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\PatchPassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextPlainRes: $obj);
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Passthrough DELETE
     *
     * @param  Operations\RemovePassthroughRequest  $request
     * @return Operations\RemovePassthroughResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function removePassthrough(Operations\RemovePassthroughRequest $request): Operations\RemovePassthroughResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/passthrough/{connection_id}/{path}', Operations\RemovePassthroughRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, text/csv;q=0.8, text/plain;q=0.6, application/xml;q=0.4, */*;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('DELETE', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (in_array($statusCode, [204, 205, 304])) {
            return new Operations\RemovePassthroughResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, '*/*')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\RemovePassthroughResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultWildcardWildcardBytes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'mixed', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\RemovePassthroughResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationJsonAny: $obj);

                return $response;
            } elseif (Utils\Utils::matchContentType($contentType, 'application/xml')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\RemovePassthroughResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationXmlRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/csv')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\RemovePassthroughResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextCsvRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\RemovePassthroughResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextPlainRes: $obj);
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Passthrough PUT
     *
     * @param  Operations\UpdatePassthroughJsonRequest  $request
     * @return Operations\UpdatePassthroughJsonResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function updatePassthroughJson(Operations\UpdatePassthroughJsonRequest $request): Operations\UpdatePassthroughJsonResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/passthrough/{connection_id}/{path}', Operations\UpdatePassthroughJsonRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json;q=1, text/csv;q=0.8, text/plain;q=0.6, application/xml;q=0.4, */*;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('PUT', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (in_array($statusCode, [204, 205, 304])) {
            return new Operations\UpdatePassthroughJsonResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, '*/*')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\UpdatePassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultWildcardWildcardBytes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'mixed', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\UpdatePassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationJsonAny: $obj);

                return $response;
            } elseif (Utils\Utils::matchContentType($contentType, 'application/xml')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\UpdatePassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationXmlRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/csv')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\UpdatePassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextCsvRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\UpdatePassthroughJsonResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextPlainRes: $obj);
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Passthrough PUT
     *
     * @param  Operations\UpdatePassthroughRawRequest  $request
     * @return Operations\UpdatePassthroughRawResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function updatePassthroughRaw(Operations\UpdatePassthroughRawRequest $request): Operations\UpdatePassthroughRawResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/passthrough/{connection_id}/{path}', Operations\UpdatePassthroughRawRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'raw');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json;q=1, text/csv;q=0.8, text/plain;q=0.6, application/xml;q=0.4, */*;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('PUT', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (in_array($statusCode, [204, 205, 304])) {
            return new Operations\UpdatePassthroughRawResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, '*/*')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\UpdatePassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultWildcardWildcardBytes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'mixed', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\UpdatePassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationJsonAny: $obj);

                return $response;
            } elseif (Utils\Utils::matchContentType($contentType, 'application/xml')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\UpdatePassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultApplicationXmlRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/csv')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\UpdatePassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextCsvRes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\UpdatePassthroughRawResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    defaultTextPlainRes: $obj);
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

}
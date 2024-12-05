<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

use Speakeasy\Serializer\DeserializationContext;
use Unified\Unified_to\Hooks\HookContext;
use Unified\Unified_to\Models\Operations;

class Student
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
     * @param  string  $baseUrl
     * @param  array<string, string>  $urlVariables
     *
     * @return string
     */
    public function getUrl(string $baseUrl, array $urlVariables): string
    {
        $serverDetails = $this->sdkConfiguration->getServerDetails();

        if ($baseUrl == null) {
            $baseUrl = $serverDetails->baseUrl;
        }

        if ($urlVariables == null) {
            $urlVariables = $serverDetails->options;
        }

        return Utils\Utils::templateUrl($baseUrl, $urlVariables);
    }

    /**
     * Create a student
     *
     * @param  Operations\CreateLmsStudentRequest  $request
     * @return Operations\CreateLmsStudentResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function createLmsStudent(Operations\CreateLmsStudentRequest $request): Operations\CreateLmsStudentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/lms/{connection_id}/student', Operations\CreateLmsStudentRequest::class, $request);
        $urlOverride = null;
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'lmsStudent', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }

        $qp = Utils\Utils::getQueryParams(Operations\CreateLmsStudentRequest::class, $request, $urlOverride);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);
        $hookContext = new HookContext('createLmsStudent', null, $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $options['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $options = Utils\Utils::convertHeadersToOptions($httpRequest, $options);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $options);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Unified\Unified_to\Models\Shared\LmsStudent', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CreateLmsStudentResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    lmsStudent: $obj);

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
     * Retrieve a student
     *
     * @param  Operations\GetLmsStudentRequest  $request
     * @return Operations\GetLmsStudentResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function getLmsStudent(Operations\GetLmsStudentRequest $request): Operations\GetLmsStudentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/lms/{connection_id}/student/{id}', Operations\GetLmsStudentRequest::class, $request);
        $urlOverride = null;
        $options = ['http_errors' => false];

        $qp = Utils\Utils::getQueryParams(Operations\GetLmsStudentRequest::class, $request, $urlOverride);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext('getLmsStudent', null, $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $options['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $options = Utils\Utils::convertHeadersToOptions($httpRequest, $options);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $options);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Unified\Unified_to\Models\Shared\LmsStudent', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetLmsStudentResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    lmsStudent: $obj);

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
     * List all students
     *
     * @param  Operations\ListLmsStudentsRequest  $request
     * @return Operations\ListLmsStudentsResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function listLmsStudents(Operations\ListLmsStudentsRequest $request): Operations\ListLmsStudentsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/lms/{connection_id}/student', Operations\ListLmsStudentsRequest::class, $request);
        $urlOverride = null;
        $options = ['http_errors' => false];

        $qp = Utils\Utils::getQueryParams(Operations\ListLmsStudentsRequest::class, $request, $urlOverride);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext('listLmsStudents', null, $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $options['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $options = Utils\Utils::convertHeadersToOptions($httpRequest, $options);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $options);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, 'array<\Unified\Unified_to\Models\Shared\LmsStudent>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\ListLmsStudentsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    lmsStudents: $obj);

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
     * Update a student
     *
     * @param  Operations\PatchLmsStudentRequest  $request
     * @return Operations\PatchLmsStudentResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function patchLmsStudent(Operations\PatchLmsStudentRequest $request): Operations\PatchLmsStudentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/lms/{connection_id}/student/{id}', Operations\PatchLmsStudentRequest::class, $request);
        $urlOverride = null;
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'lmsStudent', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }

        $qp = Utils\Utils::getQueryParams(Operations\PatchLmsStudentRequest::class, $request, $urlOverride);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('PATCH', $url);
        $hookContext = new HookContext('patchLmsStudent', null, $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $options['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $options = Utils\Utils::convertHeadersToOptions($httpRequest, $options);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $options);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Unified\Unified_to\Models\Shared\LmsStudent', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\PatchLmsStudentResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    lmsStudent: $obj);

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
     * Remove a student
     *
     * @param  Operations\RemoveLmsStudentRequest  $request
     * @return Operations\RemoveLmsStudentResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function removeLmsStudent(Operations\RemoveLmsStudentRequest $request): Operations\RemoveLmsStudentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/lms/{connection_id}/student/{id}', Operations\RemoveLmsStudentRequest::class, $request);
        $urlOverride = null;
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('DELETE', $url);
        $hookContext = new HookContext('removeLmsStudent', null, $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $options = Utils\Utils::convertHeadersToOptions($httpRequest, $options);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $options);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        if ($statusCode == 200) {
            $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

            return new Operations\RemoveLmsStudentResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

            return new Operations\RemoveLmsStudentResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        }
    }

    /**
     * Update a student
     *
     * @param  Operations\UpdateLmsStudentRequest  $request
     * @return Operations\UpdateLmsStudentResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function updateLmsStudent(Operations\UpdateLmsStudentRequest $request): Operations\UpdateLmsStudentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/lms/{connection_id}/student/{id}', Operations\UpdateLmsStudentRequest::class, $request);
        $urlOverride = null;
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'lmsStudent', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }

        $qp = Utils\Utils::getQueryParams(Operations\UpdateLmsStudentRequest::class, $request, $urlOverride);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('PUT', $url);
        $hookContext = new HookContext('updateLmsStudent', null, $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $options['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $options = Utils\Utils::convertHeadersToOptions($httpRequest, $options);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $options);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Unified\Unified_to\Models\Shared\LmsStudent', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\UpdateLmsStudentResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    lmsStudent: $obj);

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
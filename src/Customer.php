<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

use JMS\Serializer\DeserializationContext;
use Unified\Unified_to\Models\Operations;

class Customer
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
     * Create a customer
     *
     * @param  Operations\CreateTicketingCustomerRequest  $request
     * @return Operations\CreateTicketingCustomerResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function createTicketingCustomer(
        ?Operations\CreateTicketingCustomerRequest $request,
    ): Operations\CreateTicketingCustomerResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer', Operations\CreateTicketingCustomerRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'ticketingCustomer', 'json');
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
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\TicketingCustomer', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CreateTicketingCustomerResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    ticketingCustomer: $obj);

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
     * Retrieve a customer
     *
     * @param  Operations\GetTicketingCustomerRequest  $request
     * @return Operations\GetTicketingCustomerResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function getTicketingCustomer(
        ?Operations\GetTicketingCustomerRequest $request,
    ): Operations\GetTicketingCustomerResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer/{id}', Operations\GetTicketingCustomerRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\GetTicketingCustomerRequest::class, $request));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\TicketingCustomer', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetTicketingCustomerResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    ticketingCustomer: $obj);

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
     * List all customers
     *
     * @param  Operations\ListTicketingCustomersRequest  $request
     * @return Operations\ListTicketingCustomersResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function listTicketingCustomers(
        ?Operations\ListTicketingCustomersRequest $request,
    ): Operations\ListTicketingCustomersResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer', Operations\ListTicketingCustomersRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\ListTicketingCustomersRequest::class, $request));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'array<\Unified\Unified_to\Models\Shared\TicketingCustomer>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\ListTicketingCustomersResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    ticketingCustomers: $obj);

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
     * Update a customer
     *
     * @param  Operations\PatchTicketingCustomerRequest  $request
     * @return Operations\PatchTicketingCustomerResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function patchTicketingCustomer(
        ?Operations\PatchTicketingCustomerRequest $request,
    ): Operations\PatchTicketingCustomerResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer/{id}', Operations\PatchTicketingCustomerRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'ticketingCustomer', 'json');
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
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\TicketingCustomer', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\PatchTicketingCustomerResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    ticketingCustomer: $obj);

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
     * Remove a customer
     *
     * @param  Operations\RemoveTicketingCustomerRequest  $request
     * @return Operations\RemoveTicketingCustomerResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function removeTicketingCustomer(
        ?Operations\RemoveTicketingCustomerRequest $request,
    ): Operations\RemoveTicketingCustomerResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer/{id}', Operations\RemoveTicketingCustomerRequest::class, $request);
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
            return new Operations\RemoveTicketingCustomerResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        }
    }

    /**
     * Update a customer
     *
     * @param  Operations\UpdateTicketingCustomerRequest  $request
     * @return Operations\UpdateTicketingCustomerResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function updateTicketingCustomer(
        ?Operations\UpdateTicketingCustomerRequest $request,
    ): Operations\UpdateTicketingCustomerResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer/{id}', Operations\UpdateTicketingCustomerRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'ticketingCustomer', 'json');
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
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Unified\Unified_to\Models\Shared\TicketingCustomer', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\UpdateTicketingCustomerResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    ticketingCustomer: $obj);

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
<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Customer 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Create a customer
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateTicketingCustomerRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateTicketingCustomerResponse
     */
	public function createTicketingCustomer(
        ?\Unified\Unified_to\Models\Operations\CreateTicketingCustomerRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateTicketingCustomerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer', \Unified\Unified_to\Models\Operations\CreateTicketingCustomerRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingCustomer", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateTicketingCustomerResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingCustomer = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingCustomer', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a customer
     * 
     * @param \Unified\Unified_to\Models\Operations\GetTicketingCustomerRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetTicketingCustomerResponse
     */
	public function getTicketingCustomer(
        ?\Unified\Unified_to\Models\Operations\GetTicketingCustomerRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetTicketingCustomerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer/{id}', \Unified\Unified_to\Models\Operations\GetTicketingCustomerRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetTicketingCustomerRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetTicketingCustomerResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingCustomer = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingCustomer', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all customers
     * 
     * @param \Unified\Unified_to\Models\Operations\ListTicketingCustomersRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListTicketingCustomersResponse
     */
	public function listTicketingCustomers(
        ?\Unified\Unified_to\Models\Operations\ListTicketingCustomersRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListTicketingCustomersResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer', \Unified\Unified_to\Models\Operations\ListTicketingCustomersRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListTicketingCustomersRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListTicketingCustomersResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingCustomers = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\TicketingCustomer>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a customer
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchTicketingCustomerRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchTicketingCustomerResponse
     */
	public function patchTicketingCustomer(
        ?\Unified\Unified_to\Models\Operations\PatchTicketingCustomerRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchTicketingCustomerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer/{id}', \Unified\Unified_to\Models\Operations\PatchTicketingCustomerRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingCustomer", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchTicketingCustomerResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingCustomer = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingCustomer', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove a customer
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveTicketingCustomerRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveTicketingCustomerResponse
     */
	public function removeTicketingCustomer(
        ?\Unified\Unified_to\Models\Operations\RemoveTicketingCustomerRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveTicketingCustomerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer/{id}', \Unified\Unified_to\Models\Operations\RemoveTicketingCustomerRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveTicketingCustomerResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->res = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Update a customer
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateTicketingCustomerRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateTicketingCustomerResponse
     */
	public function updateTicketingCustomer(
        ?\Unified\Unified_to\Models\Operations\UpdateTicketingCustomerRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateTicketingCustomerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer/{id}', \Unified\Unified_to\Models\Operations\UpdateTicketingCustomerRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingCustomer", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateTicketingCustomerResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingCustomer = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingCustomer', 'json');
            }
        }

        return $response;
    }
}
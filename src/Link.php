<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Link 
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
     * Create a payment link
     * 
     * @param \Unified\Unified_to\Models\Operations\CreatePaymentLinkRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreatePaymentLinkResponse
     */
	public function createPaymentLink(
        ?\Unified\Unified_to\Models\Operations\CreatePaymentLinkRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreatePaymentLinkResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/link', \Unified\Unified_to\Models\Operations\CreatePaymentLinkRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "paymentLink", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreatePaymentLinkResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentLink = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentLink', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a payment link
     * 
     * @param \Unified\Unified_to\Models\Operations\GetPaymentLinkRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetPaymentLinkResponse
     */
	public function getPaymentLink(
        ?\Unified\Unified_to\Models\Operations\GetPaymentLinkRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetPaymentLinkResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/link/{id}', \Unified\Unified_to\Models\Operations\GetPaymentLinkRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetPaymentLinkRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetPaymentLinkResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentLink = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentLink', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all payment links
     * 
     * @param \Unified\Unified_to\Models\Operations\ListPaymentLinksRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListPaymentLinksResponse
     */
	public function listPaymentLinks(
        ?\Unified\Unified_to\Models\Operations\ListPaymentLinksRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListPaymentLinksResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/link', \Unified\Unified_to\Models\Operations\ListPaymentLinksRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListPaymentLinksRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListPaymentLinksResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentLinks = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\PaymentLink>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a payment link
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchPaymentLinkRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchPaymentLinkResponse
     */
	public function patchPaymentLink(
        ?\Unified\Unified_to\Models\Operations\PatchPaymentLinkRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchPaymentLinkResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/link/{id}', \Unified\Unified_to\Models\Operations\PatchPaymentLinkRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "paymentLink", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchPaymentLinkResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentLink = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentLink', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove a payment link
     * 
     * @param \Unified\Unified_to\Models\Operations\RemovePaymentLinkRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemovePaymentLinkResponse
     */
	public function removePaymentLink(
        ?\Unified\Unified_to\Models\Operations\RemovePaymentLinkRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemovePaymentLinkResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/link/{id}', \Unified\Unified_to\Models\Operations\RemovePaymentLinkRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemovePaymentLinkResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (($httpResponse->getStatusCode() >= 200 && $httpResponse->getStatusCode() < 300)) {
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->string = $serializer->deserialize((string)$httpResponse->getBody(), 'string', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a payment link
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdatePaymentLinkRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdatePaymentLinkResponse
     */
	public function updatePaymentLink(
        ?\Unified\Unified_to\Models\Operations\UpdatePaymentLinkRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdatePaymentLinkResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/link/{id}', \Unified\Unified_to\Models\Operations\UpdatePaymentLinkRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "paymentLink", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdatePaymentLinkResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentLink = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentLink', 'json');
            }
        }

        return $response;
    }
}
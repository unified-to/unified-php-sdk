<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Contact 
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
     * Remove a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdResponse
     */
	public function deleteCrmConnectionIdContactId(
        ?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->deleteCrmConnectionIdContactIdDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Remove company association from a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdResponse
     */
	public function deleteCrmConnectionIdContactIdCompanyCompanyId(
        ?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}/company/{company_id}', \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdCompanyCompanyIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove deal association from a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdResponse
     */
	public function deleteCrmConnectionIdContactIdDealDealId(
        ?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}/deal/{deal_id}', \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdContactIdDealDealIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdResponse
     */
	public function deleteUcConnectionIdContactId(
        ?\Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->deleteUcConnectionIdContactIdDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List all contacts
     * 
     * @param \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactResponse
     */
	public function getCrmConnectionIdContact(
        ?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact', \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmContacts = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\CrmContact>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdResponse
     */
	public function getCrmConnectionIdContactId(
        ?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetCrmConnectionIdContactIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all contacts
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactResponse
     */
	public function getUcConnectionIdContact(
        ?\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact', \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContacts = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\UcContact>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdResponse
     */
	public function getUcConnectionIdContactId(
        ?\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\UcContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdResponse
     */
	public function patchCrmConnectionIdContactId(
        ?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Associate a company with a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdResponse
     */
	public function patchCrmConnectionIdContactIdCompanyCompanyId(
        ?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}/company/{company_id}', \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdCompanyCompanyIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Associate a deal with a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdResponse
     */
	public function patchCrmConnectionIdContactIdDealDealId(
        ?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}/deal/{deal_id}', \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdContactIdDealDealIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdResponse
     */
	public function patchUcConnectionIdContactId(
        ?\Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ucContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\UcContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactResponse
     */
	public function postCrmConnectionIdContact(
        ?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact', \Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PostCrmConnectionIdContactResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PostUcConnectionIdContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\PostUcConnectionIdContactResponse
     */
	public function postUcConnectionIdContact(
        ?\Unified\Unified_to\Models\Operations\PostUcConnectionIdContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\PostUcConnectionIdContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact', \Unified\Unified_to\Models\Operations\PostUcConnectionIdContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ucContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PostUcConnectionIdContactResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\UcContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdResponse
     */
	public function putCrmConnectionIdContactId(
        ?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Associate a company with a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdResponse
     */
	public function putCrmConnectionIdContactIdCompanyCompanyId(
        ?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}/company/{company_id}', \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdCompanyCompanyIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Associate a deal with a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdResponse
     */
	public function putCrmConnectionIdContactIdDealDealId(
        ?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}/deal/{deal_id}', \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutCrmConnectionIdContactIdDealDealIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdResponse
     */
	public function putUcConnectionIdContactId(
        ?\Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ucContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\UcContact', 'json');
            }
        }

        return $response;
    }
}
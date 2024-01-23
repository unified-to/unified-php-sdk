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
     * Create a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateAccountingContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateAccountingContactResponse
     */
	public function createAccountingContact(
        ?\Unified\Unified_to\Models\Operations\CreateAccountingContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateAccountingContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/contact', \Unified\Unified_to\Models\Operations\CreateAccountingContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "accountingContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateAccountingContactResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateCrmContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateCrmContactResponse
     */
	public function createCrmContact(
        ?\Unified\Unified_to\Models\Operations\CreateCrmContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateCrmContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact', \Unified\Unified_to\Models\Operations\CreateCrmContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateCrmContactResponse();
        $response->statusCode = $statusCode;
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
     * @param \Unified\Unified_to\Models\Operations\CreateUcContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateUcContactResponse
     */
	public function createUcContact(
        ?\Unified\Unified_to\Models\Operations\CreateUcContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateUcContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact', \Unified\Unified_to\Models\Operations\CreateUcContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ucContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateUcContactResponse();
        $response->statusCode = $statusCode;
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
     * Retrieve a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\GetAccountingContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetAccountingContactResponse
     */
	public function getAccountingContact(
        ?\Unified\Unified_to\Models\Operations\GetAccountingContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetAccountingContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\GetAccountingContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetAccountingContactRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetAccountingContactResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\GetCrmContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetCrmContactResponse
     */
	public function getCrmContact(
        ?\Unified\Unified_to\Models\Operations\GetCrmContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetCrmContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\GetCrmContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetCrmContactRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetCrmContactResponse();
        $response->statusCode = $statusCode;
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
     * Retrieve a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUcContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUcContactResponse
     */
	public function getUcContact(
        ?\Unified\Unified_to\Models\Operations\GetUcContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUcContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\GetUcContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUcContactRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetUcContactResponse();
        $response->statusCode = $statusCode;
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
     * List all contacts
     * 
     * @param \Unified\Unified_to\Models\Operations\ListAccountingContactsRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListAccountingContactsResponse
     */
	public function listAccountingContacts(
        ?\Unified\Unified_to\Models\Operations\ListAccountingContactsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListAccountingContactsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/contact', \Unified\Unified_to\Models\Operations\ListAccountingContactsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListAccountingContactsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListAccountingContactsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingContacts = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\AccountingContact>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all contacts
     * 
     * @param \Unified\Unified_to\Models\Operations\ListCrmContactsRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListCrmContactsResponse
     */
	public function listCrmContacts(
        ?\Unified\Unified_to\Models\Operations\ListCrmContactsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListCrmContactsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact', \Unified\Unified_to\Models\Operations\ListCrmContactsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListCrmContactsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListCrmContactsResponse();
        $response->statusCode = $statusCode;
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
     * List all contacts
     * 
     * @param \Unified\Unified_to\Models\Operations\ListUcContactsRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListUcContactsResponse
     */
	public function listUcContacts(
        ?\Unified\Unified_to\Models\Operations\ListUcContactsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListUcContactsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact', \Unified\Unified_to\Models\Operations\ListUcContactsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListUcContactsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListUcContactsResponse();
        $response->statusCode = $statusCode;
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
     * Update a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchAccountingContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchAccountingContactResponse
     */
	public function patchAccountingContact(
        ?\Unified\Unified_to\Models\Operations\PatchAccountingContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchAccountingContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\PatchAccountingContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "accountingContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchAccountingContactResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchCrmContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchCrmContactResponse
     */
	public function patchCrmContact(
        ?\Unified\Unified_to\Models\Operations\PatchCrmContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchCrmContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\PatchCrmContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchCrmContactResponse();
        $response->statusCode = $statusCode;
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
     * @param \Unified\Unified_to\Models\Operations\PatchUcContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchUcContactResponse
     */
	public function patchUcContact(
        ?\Unified\Unified_to\Models\Operations\PatchUcContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchUcContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\PatchUcContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ucContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchUcContactResponse();
        $response->statusCode = $statusCode;
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
     * Remove a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveAccountingContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveAccountingContactResponse
     */
	public function removeAccountingContact(
        ?\Unified\Unified_to\Models\Operations\RemoveAccountingContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveAccountingContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\RemoveAccountingContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveAccountingContactResponse();
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
     * Remove a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveCrmContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveCrmContactResponse
     */
	public function removeCrmContact(
        ?\Unified\Unified_to\Models\Operations\RemoveCrmContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveCrmContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\RemoveCrmContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveCrmContactResponse();
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
     * Remove a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveUcContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveUcContactResponse
     */
	public function removeUcContact(
        ?\Unified\Unified_to\Models\Operations\RemoveUcContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveUcContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\RemoveUcContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveUcContactResponse();
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
     * Update a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateAccountingContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateAccountingContactResponse
     */
	public function updateAccountingContact(
        ?\Unified\Unified_to\Models\Operations\UpdateAccountingContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateAccountingContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\UpdateAccountingContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "accountingContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateAccountingContactResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateCrmContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateCrmContactResponse
     */
	public function updateCrmContact(
        ?\Unified\Unified_to\Models\Operations\UpdateCrmContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateCrmContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\UpdateCrmContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateCrmContactResponse();
        $response->statusCode = $statusCode;
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
     * @param \Unified\Unified_to\Models\Operations\UpdateUcContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateUcContactResponse
     */
	public function updateUcContact(
        ?\Unified\Unified_to\Models\Operations\UpdateUcContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateUcContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\UpdateUcContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ucContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateUcContactResponse();
        $response->statusCode = $statusCode;
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
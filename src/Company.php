<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Company 
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
     * Create a company
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateCrmCompanyRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateCrmCompanyResponse
     */
	public function createCrmCompany(
        ?\Unified\Unified_to\Models\Operations\CreateCrmCompanyRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateCrmCompanyResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/company', \Unified\Unified_to\Models\Operations\CreateCrmCompanyRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmCompany", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateCrmCompanyResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmCompany = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmCompany', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a company
     * 
     * @param \Unified\Unified_to\Models\Operations\GetAtsCompanyRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetAtsCompanyResponse
     */
	public function getAtsCompany(
        ?\Unified\Unified_to\Models\Operations\GetAtsCompanyRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetAtsCompanyResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/company/{id}', \Unified\Unified_to\Models\Operations\GetAtsCompanyRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetAtsCompanyRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetAtsCompanyResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsCompany = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsCompany', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a company
     * 
     * @param \Unified\Unified_to\Models\Operations\GetCrmCompanyRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetCrmCompanyResponse
     */
	public function getCrmCompany(
        ?\Unified\Unified_to\Models\Operations\GetCrmCompanyRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetCrmCompanyResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/company/{id}', \Unified\Unified_to\Models\Operations\GetCrmCompanyRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetCrmCompanyRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetCrmCompanyResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmCompany = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmCompany', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all companies
     * 
     * @param \Unified\Unified_to\Models\Operations\ListAtsCompaniesRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListAtsCompaniesResponse
     */
	public function listAtsCompanies(
        ?\Unified\Unified_to\Models\Operations\ListAtsCompaniesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListAtsCompaniesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/company', \Unified\Unified_to\Models\Operations\ListAtsCompaniesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListAtsCompaniesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListAtsCompaniesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsCompanies = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\AtsCompany>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all companies
     * 
     * @param \Unified\Unified_to\Models\Operations\ListCrmCompaniesRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListCrmCompaniesResponse
     */
	public function listCrmCompanies(
        ?\Unified\Unified_to\Models\Operations\ListCrmCompaniesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListCrmCompaniesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/company', \Unified\Unified_to\Models\Operations\ListCrmCompaniesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListCrmCompaniesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListCrmCompaniesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmCompanies = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\CrmCompany>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve enrichment information for a company
     * 
     * @param \Unified\Unified_to\Models\Operations\ListEnrichCompaniesRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListEnrichCompaniesResponse
     */
	public function listEnrichCompanies(
        ?\Unified\Unified_to\Models\Operations\ListEnrichCompaniesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListEnrichCompaniesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/enrich/{connection_id}/company', \Unified\Unified_to\Models\Operations\ListEnrichCompaniesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListEnrichCompaniesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListEnrichCompaniesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->enrichCompany = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\EnrichCompany', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a company
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchCrmCompanyRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchCrmCompanyResponse
     */
	public function patchCrmCompany(
        ?\Unified\Unified_to\Models\Operations\PatchCrmCompanyRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchCrmCompanyResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/company/{id}', \Unified\Unified_to\Models\Operations\PatchCrmCompanyRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmCompany", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchCrmCompanyResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmCompany = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmCompany', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove a company
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveCrmCompanyRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveCrmCompanyResponse
     */
	public function removeCrmCompany(
        ?\Unified\Unified_to\Models\Operations\RemoveCrmCompanyRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveCrmCompanyResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/company/{id}', \Unified\Unified_to\Models\Operations\RemoveCrmCompanyRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveCrmCompanyResponse();
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
     * Update a company
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateCrmCompanyRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateCrmCompanyResponse
     */
	public function updateCrmCompany(
        ?\Unified\Unified_to\Models\Operations\UpdateCrmCompanyRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateCrmCompanyResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/company/{id}', \Unified\Unified_to\Models\Operations\UpdateCrmCompanyRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmCompany", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateCrmCompanyResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmCompany = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmCompany', 'json');
            }
        }

        return $response;
    }
}
<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Note
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
     * Create a note
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateTicketingNoteRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateTicketingNoteResponse
     */
    public function createTicketingNote(
        ?\Unified\Unified_to\Models\Operations\CreateTicketingNoteRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateTicketingNoteResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note', \Unified\Unified_to\Models\Operations\CreateTicketingNoteRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'ticketingNote', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateTicketingNoteResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingNote = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingNote', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a note
     *
     * @param  \Unified\Unified_to\Models\Operations\GetTicketingNoteRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetTicketingNoteResponse
     */
    public function getTicketingNote(
        ?\Unified\Unified_to\Models\Operations\GetTicketingNoteRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetTicketingNoteResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{id}', \Unified\Unified_to\Models\Operations\GetTicketingNoteRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetTicketingNoteRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetTicketingNoteResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingNote = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingNote', 'json');
            }
        }

        return $response;
    }

    /**
     * List all notes
     *
     * @param  \Unified\Unified_to\Models\Operations\ListTicketingNotesRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListTicketingNotesResponse
     */
    public function listTicketingNotes(
        ?\Unified\Unified_to\Models\Operations\ListTicketingNotesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListTicketingNotesResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note', \Unified\Unified_to\Models\Operations\ListTicketingNotesRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListTicketingNotesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListTicketingNotesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingNotes = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\TicketingNote>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a note
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchTicketingNoteRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchTicketingNoteResponse
     */
    public function patchTicketingNote(
        ?\Unified\Unified_to\Models\Operations\PatchTicketingNoteRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchTicketingNoteResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{id}', \Unified\Unified_to\Models\Operations\PatchTicketingNoteRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'ticketingNote', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchTicketingNoteResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingNote = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingNote', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove a note
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveTicketingNoteRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveTicketingNoteResponse
     */
    public function removeTicketingNote(
        ?\Unified\Unified_to\Models\Operations\RemoveTicketingNoteRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveTicketingNoteResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{id}', \Unified\Unified_to\Models\Operations\RemoveTicketingNoteRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveTicketingNoteResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if (true) { /** @phpstan-ignore-line */
        }

        return $response;
    }

    /**
     * Update a note
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateTicketingNoteRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateTicketingNoteResponse
     */
    public function updateTicketingNote(
        ?\Unified\Unified_to\Models\Operations\UpdateTicketingNoteRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateTicketingNoteResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{id}', \Unified\Unified_to\Models\Operations\UpdateTicketingNoteRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'ticketingNote', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateTicketingNoteResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingNote = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingNote', 'json');
            }
        }

        return $response;
    }
}
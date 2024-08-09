<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Payment
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
     * Create a link
     *
     * @param  \Unified\Unified_to\Models\Operations\CreatePaymentLinkRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreatePaymentLinkResponse
     */
    public function createPaymentLink(
        ?\Unified\Unified_to\Models\Operations\CreatePaymentLinkRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreatePaymentLinkResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/link', \Unified\Unified_to\Models\Operations\CreatePaymentLinkRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'paymentLink', 'json');
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
                $response->paymentLink = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentLink', 'json');
            }
        }

        return $response;
    }

    /**
     * Create a payment
     *
     * @param  \Unified\Unified_to\Models\Operations\CreatePaymentPaymentRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreatePaymentPaymentResponse
     */
    public function createPaymentPayment(
        ?\Unified\Unified_to\Models\Operations\CreatePaymentPaymentRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreatePaymentPaymentResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/payment', \Unified\Unified_to\Models\Operations\CreatePaymentPaymentRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'paymentPayment', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreatePaymentPaymentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentPayment = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentPayment', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a link
     *
     * @param  \Unified\Unified_to\Models\Operations\GetPaymentLinkRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetPaymentLinkResponse
     */
    public function getPaymentLink(
        ?\Unified\Unified_to\Models\Operations\GetPaymentLinkRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetPaymentLinkResponse {
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
                $response->paymentLink = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentLink', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a payment
     *
     * @param  \Unified\Unified_to\Models\Operations\GetPaymentPaymentRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetPaymentPaymentResponse
     */
    public function getPaymentPayment(
        ?\Unified\Unified_to\Models\Operations\GetPaymentPaymentRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetPaymentPaymentResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/payment/{id}', \Unified\Unified_to\Models\Operations\GetPaymentPaymentRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetPaymentPaymentRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetPaymentPaymentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentPayment = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentPayment', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a payout
     *
     * @param  \Unified\Unified_to\Models\Operations\GetPaymentPayoutRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetPaymentPayoutResponse
     */
    public function getPaymentPayout(
        ?\Unified\Unified_to\Models\Operations\GetPaymentPayoutRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetPaymentPayoutResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/payout/{id}', \Unified\Unified_to\Models\Operations\GetPaymentPayoutRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetPaymentPayoutRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetPaymentPayoutResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentPayout = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentPayout', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a refund
     *
     * @param  \Unified\Unified_to\Models\Operations\GetPaymentRefundRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetPaymentRefundResponse
     */
    public function getPaymentRefund(
        ?\Unified\Unified_to\Models\Operations\GetPaymentRefundRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetPaymentRefundResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/refund/{id}', \Unified\Unified_to\Models\Operations\GetPaymentRefundRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetPaymentRefundRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetPaymentRefundResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentRefund = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentRefund', 'json');
            }
        }

        return $response;
    }

    /**
     * List all links
     *
     * @param  \Unified\Unified_to\Models\Operations\ListPaymentLinksRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListPaymentLinksResponse
     */
    public function listPaymentLinks(
        ?\Unified\Unified_to\Models\Operations\ListPaymentLinksRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListPaymentLinksResponse {
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
                $response->paymentLinks = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\PaymentLink>', 'json');
            }
        }

        return $response;
    }

    /**
     * List all payments
     *
     * @param  \Unified\Unified_to\Models\Operations\ListPaymentPaymentsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListPaymentPaymentsResponse
     */
    public function listPaymentPayments(
        ?\Unified\Unified_to\Models\Operations\ListPaymentPaymentsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListPaymentPaymentsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/payment', \Unified\Unified_to\Models\Operations\ListPaymentPaymentsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListPaymentPaymentsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListPaymentPaymentsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentPayments = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\PaymentPayment>', 'json');
            }
        }

        return $response;
    }

    /**
     * List all payouts
     *
     * @param  \Unified\Unified_to\Models\Operations\ListPaymentPayoutsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListPaymentPayoutsResponse
     */
    public function listPaymentPayouts(
        ?\Unified\Unified_to\Models\Operations\ListPaymentPayoutsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListPaymentPayoutsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/payout', \Unified\Unified_to\Models\Operations\ListPaymentPayoutsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListPaymentPayoutsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListPaymentPayoutsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentPayouts = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\PaymentPayout>', 'json');
            }
        }

        return $response;
    }

    /**
     * List all refunds
     *
     * @param  \Unified\Unified_to\Models\Operations\ListPaymentRefundsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListPaymentRefundsResponse
     */
    public function listPaymentRefunds(
        ?\Unified\Unified_to\Models\Operations\ListPaymentRefundsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListPaymentRefundsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/refund', \Unified\Unified_to\Models\Operations\ListPaymentRefundsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListPaymentRefundsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListPaymentRefundsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentRefunds = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\PaymentRefund>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a link
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchPaymentLinkRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchPaymentLinkResponse
     */
    public function patchPaymentLink(
        ?\Unified\Unified_to\Models\Operations\PatchPaymentLinkRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchPaymentLinkResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/link/{id}', \Unified\Unified_to\Models\Operations\PatchPaymentLinkRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'paymentLink', 'json');
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
                $response->paymentLink = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentLink', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a payment
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchPaymentPaymentRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchPaymentPaymentResponse
     */
    public function patchPaymentPayment(
        ?\Unified\Unified_to\Models\Operations\PatchPaymentPaymentRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchPaymentPaymentResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/payment/{id}', \Unified\Unified_to\Models\Operations\PatchPaymentPaymentRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'paymentPayment', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchPaymentPaymentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentPayment = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentPayment', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove a link
     *
     * @param  \Unified\Unified_to\Models\Operations\RemovePaymentLinkRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemovePaymentLinkResponse
     */
    public function removePaymentLink(
        ?\Unified\Unified_to\Models\Operations\RemovePaymentLinkRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemovePaymentLinkResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/link/{id}', \Unified\Unified_to\Models\Operations\RemovePaymentLinkRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemovePaymentLinkResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if (true) { /** @phpstan-ignore-line */
        }

        return $response;
    }

    /**
     * Remove a payment
     *
     * @param  \Unified\Unified_to\Models\Operations\RemovePaymentPaymentRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemovePaymentPaymentResponse
     */
    public function removePaymentPayment(
        ?\Unified\Unified_to\Models\Operations\RemovePaymentPaymentRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemovePaymentPaymentResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/payment/{id}', \Unified\Unified_to\Models\Operations\RemovePaymentPaymentRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemovePaymentPaymentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if (true) { /** @phpstan-ignore-line */
        }

        return $response;
    }

    /**
     * Update a link
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdatePaymentLinkRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdatePaymentLinkResponse
     */
    public function updatePaymentLink(
        ?\Unified\Unified_to\Models\Operations\UpdatePaymentLinkRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdatePaymentLinkResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/link/{id}', \Unified\Unified_to\Models\Operations\UpdatePaymentLinkRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'paymentLink', 'json');
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
                $response->paymentLink = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentLink', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a payment
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdatePaymentPaymentRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdatePaymentPaymentResponse
     */
    public function updatePaymentPayment(
        ?\Unified\Unified_to\Models\Operations\UpdatePaymentPaymentRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdatePaymentPaymentResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/payment/{id}', \Unified\Unified_to\Models\Operations\UpdatePaymentPaymentRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'paymentPayment', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdatePaymentPaymentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentPayment = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentPayment', 'json');
            }
        }

        return $response;
    }
}
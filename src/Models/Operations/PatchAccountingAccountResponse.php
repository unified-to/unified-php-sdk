<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


class PatchAccountingAccountResponse
{
    /**
     * Successful
     *
     * @var ?\Unified\Unified_to\Models\Shared\AccountingAccount $accountingAccount
     */
    public ?\Unified\Unified_to\Models\Shared\AccountingAccount $accountingAccount = null;

    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;

    public function __construct()
    {
        $this->accountingAccount = null;
        $this->contentType = '';
        $this->statusCode = 0;
        $this->rawResponse = null;
    }
}
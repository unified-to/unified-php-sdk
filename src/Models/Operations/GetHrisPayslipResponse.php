<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


class GetHrisPayslipResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * Successful
     *
     * @var ?\Unified\Unified_to\Models\Shared\HrisPayslip $hrisPayslip
     */
    public ?\Unified\Unified_to\Models\Shared\HrisPayslip $hrisPayslip = null;

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
        $this->contentType = '';
        $this->hrisPayslip = null;
        $this->statusCode = 0;
        $this->rawResponse = null;
    }
}
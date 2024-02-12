<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


enum AccountingRefundStatus: string
{
    case Succeeded = 'SUCCEEDED';
    case Pending = 'PENDING';
    case Failed = 'FAILED';
    case Canceled = 'CANCELED';
}

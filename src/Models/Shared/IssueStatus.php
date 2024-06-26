<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


enum IssueStatus: string
{
    case Completed = 'COMPLETED';
    case New = 'NEW';
    case Roadmap = 'ROADMAP';
    case InProgress = 'IN_PROGRESS';
    case OnHold = 'ON_HOLD';
    case Validating = 'VALIDATING';
    case Rejected = 'REJECTED';
}

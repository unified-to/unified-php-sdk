<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


enum CrmEventType: string
{
    case Note = 'NOTE';
    case Email = 'EMAIL';
    case Task = 'TASK';
    case Meeting = 'MEETING';
    case Call = 'CALL';
    case MarketingEmail = 'MARKETING_EMAIL';
    case Form = 'FORM';
    case PageView = 'PAGE_VIEW';
}

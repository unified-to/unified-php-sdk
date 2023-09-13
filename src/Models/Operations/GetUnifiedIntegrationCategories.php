<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


enum GetUnifiedIntegrationCategories: string
{
    case Passthrough = 'passthrough';
    case Hris = 'hris';
    case Ats = 'ats';
    case Auth = 'auth';
    case Crm = 'crm';
    case Enrich = 'enrich';
    case Martech = 'martech';
    case Ticketing = 'ticketing';
    case Uc = 'uc';
}

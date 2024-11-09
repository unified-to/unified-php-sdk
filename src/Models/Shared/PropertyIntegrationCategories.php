<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


enum PropertyIntegrationCategories: string
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
    case Accounting = 'accounting';
    case Storage = 'storage';
    case Commerce = 'commerce';
    case Payment = 'payment';
    case Genai = 'genai';
    case Messaging = 'messaging';
    case Kms = 'kms';
    case Task = 'task';
    case Scim = 'scim';
    case Lms = 'lms';
    case Repo = 'repo';
}

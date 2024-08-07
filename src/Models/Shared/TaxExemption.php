<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


enum TaxExemption: string
{
    case FederalGov = 'FEDERAL_GOV';
    case RegionGov = 'REGION_GOV';
    case LocalGov = 'LOCAL_GOV';
    case TribalGov = 'TRIBAL_GOV';
    case CharitableOrg = 'CHARITABLE_ORG';
    case ReligiousOrg = 'RELIGIOUS_ORG';
    case EducationalOrg = 'EDUCATIONAL_ORG';
    case MedicalOrg = 'MEDICAL_ORG';
    case Resale = 'RESALE';
    case Foreign = 'FOREIGN';
    case Other = 'OTHER';
}

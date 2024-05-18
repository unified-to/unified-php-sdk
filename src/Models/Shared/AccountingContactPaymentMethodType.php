<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


enum AccountingContactPaymentMethodType: string
{
    case Ach = 'ACH';
    case Alipay = 'ALIPAY';
    case Card = 'CARD';
    case Giropay = 'GIROPAY';
    case Ideal = 'IDEAL';
    case Other = 'OTHER';
    case Paypal = 'PAYPAL';
    case Unknown = '';
}

<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class CreatePaymentSubscriptionRequest
{
    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     *
     * @var ?Shared\PaymentSubscription $paymentSubscription
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\PaymentSubscription $paymentSubscription = null;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     * @param  string  $connectionId
     * @param  ?Shared\PaymentSubscription  $paymentSubscription
     * @param  ?array<string>  $fields
     * @phpstan-pure
     */
    public function __construct(string $connectionId, ?Shared\PaymentSubscription $paymentSubscription = null, ?array $fields = null)
    {
        $this->connectionId = $connectionId;
        $this->paymentSubscription = $paymentSubscription;
        $this->fields = $fields;
    }
}
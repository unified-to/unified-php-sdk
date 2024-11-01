<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class PaymentRefund
{
    /**
     *
     * @var ?string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdAt = null;

    /**
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $notes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('notes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $notes = null;

    /**
     *
     * @var string $paymentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_id')]
    public string $paymentId;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     *
     * @var ?string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     *
     * @var ?PaymentRefundStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PaymentRefundStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PaymentRefundStatus $status = null;

    /**
     *
     * @var float $totalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_amount')]
    public float $totalAmount;

    /**
     *
     * @var ?string $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $updatedAt = null;

    /**
     * @param  string  $paymentId
     * @param  float  $totalAmount
     * @param  ?string  $createdAt
     * @param  ?string  $currency
     * @param  ?string  $id
     * @param  ?string  $notes
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $reference
     * @param  ?PaymentRefundStatus  $status
     * @param  ?string  $updatedAt
     */
    public function __construct(string $paymentId, float $totalAmount, ?string $createdAt = null, ?string $currency = null, ?string $id = null, ?string $notes = null, ?array $raw = null, ?string $reference = null, ?PaymentRefundStatus $status = null, ?string $updatedAt = null)
    {
        $this->paymentId = $paymentId;
        $this->totalAmount = $totalAmount;
        $this->createdAt = $createdAt;
        $this->currency = $currency;
        $this->id = $id;
        $this->notes = $notes;
        $this->raw = $raw;
        $this->reference = $reference;
        $this->status = $status;
        $this->updatedAt = $updatedAt;
    }
}
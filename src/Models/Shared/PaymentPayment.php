<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class PaymentPayment
{
    /**
     *
     * @var ?string $accountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountId = null;

    /**
     *
     * @var ?string $contactId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contact_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contactId = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $invoiceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoice_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $invoiceId = null;

    /**
     *
     * @var ?string $notes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('notes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $notes = null;

    /**
     *
     * @var ?string $paymentMethod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_method')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $paymentMethod = null;

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
     * @var ?float $totalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $totalAmount = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     * @param  ?string  $accountId
     * @param  ?string  $contactId
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $currency
     * @param  ?string  $id
     * @param  ?string  $invoiceId
     * @param  ?string  $notes
     * @param  ?string  $paymentMethod
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $reference
     * @param  ?float  $totalAmount
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?string $accountId = null, ?string $contactId = null, ?\DateTime $createdAt = null, ?string $id = null, ?string $invoiceId = null, ?string $notes = null, ?string $paymentMethod = null, ?array $raw = null, ?string $reference = null, ?float $totalAmount = null, ?\DateTime $updatedAt = null, ?string $currency = 'USD')
    {
        $this->accountId = $accountId;
        $this->contactId = $contactId;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->invoiceId = $invoiceId;
        $this->notes = $notes;
        $this->paymentMethod = $paymentMethod;
        $this->raw = $raw;
        $this->reference = $reference;
        $this->totalAmount = $totalAmount;
        $this->updatedAt = $updatedAt;
        $this->currency = $currency;
    }
}
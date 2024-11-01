<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class HrisPayslip
{
    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     * $details
     *
     * @var ?array<HrisPayslipDetail> $details
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('details')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisPayslipDetail>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $details = null;

    /**
     *
     * @var ?\DateTime $endAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('end_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $endAt = null;

    /**
     *
     * @var ?float $grossAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('gross_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $grossAmount = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?float $netAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('net_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $netAmount = null;

    /**
     *
     * @var ?\DateTime $paidAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paid_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $paidAt = null;

    /**
     *
     * @var ?PaymentType $paymentType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PaymentType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PaymentType $paymentType = null;

    /**
     * $raw
     *
     * @var array<string, mixed> $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>')]
    public array $raw;

    /**
     *
     * @var ?\DateTime $startAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $startAt = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var string $userId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    public string $userId;

    /**
     * @param  array<string, mixed>  $raw
     * @param  string  $userId
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $currency
     * @param  ?array<HrisPayslipDetail>  $details
     * @param  ?\DateTime  $endAt
     * @param  ?float  $grossAmount
     * @param  ?string  $id
     * @param  ?float  $netAmount
     * @param  ?\DateTime  $paidAt
     * @param  ?PaymentType  $paymentType
     * @param  ?\DateTime  $startAt
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(array $raw, string $userId, ?\DateTime $createdAt = null, ?string $currency = null, ?array $details = null, ?\DateTime $endAt = null, ?float $grossAmount = null, ?string $id = null, ?float $netAmount = null, ?\DateTime $paidAt = null, ?PaymentType $paymentType = null, ?\DateTime $startAt = null, ?\DateTime $updatedAt = null)
    {
        $this->raw = $raw;
        $this->userId = $userId;
        $this->createdAt = $createdAt;
        $this->currency = $currency;
        $this->details = $details;
        $this->endAt = $endAt;
        $this->grossAmount = $grossAmount;
        $this->id = $id;
        $this->netAmount = $netAmount;
        $this->paidAt = $paidAt;
        $this->paymentType = $paymentType;
        $this->startAt = $startAt;
        $this->updatedAt = $updatedAt;
    }
}
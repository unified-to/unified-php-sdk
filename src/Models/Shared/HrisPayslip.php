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
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $currency
     */
    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $currency = null;

    /**
     * $details
     *
     * @var ?array<HrisPayslipDetail> $details
     */
    #[\JMS\Serializer\Annotation\SerializedName('details')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisPayslipDetail>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $details = null;

    /**
     *
     * @var ?\DateTime $endAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('end_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $endAt = null;

    /**
     *
     * @var ?float $grossAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('gross_amount')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $grossAmount = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    /**
     *
     * @var ?float $netAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('net_amount')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $netAmount = null;

    /**
     *
     * @var ?\DateTime $paidAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('paid_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $paidAt = null;

    /**
     *
     * @var ?PaymentType $paymentType
     */
    #[\JMS\Serializer\Annotation\SerializedName('payment_type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PaymentType')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PaymentType $paymentType = null;

    /**
     * $raw
     *
     * @var array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    public array $raw;

    /**
     *
     * @var ?\DateTime $startAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('start_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $startAt = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var string $userId
     */
    #[\JMS\Serializer\Annotation\SerializedName('user_id')]
    public string $userId;

    /**
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $userId
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
    public function __construct(?array $raw = null, ?string $userId = null, ?\DateTime $createdAt = null, ?string $currency = null, ?array $details = null, ?\DateTime $endAt = null, ?float $grossAmount = null, ?string $id = null, ?float $netAmount = null, ?\DateTime $paidAt = null, ?PaymentType $paymentType = null, ?\DateTime $startAt = null, ?\DateTime $updatedAt = null)
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
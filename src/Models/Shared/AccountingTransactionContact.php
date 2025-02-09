<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingTransactionContact
{
    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var ?bool $isCustomer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_customer')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isCustomer = null;

    /**
     *
     * @var ?bool $isSupplier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_supplier')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isSupplier = null;

    /**
     * @param  string  $id
     * @param  ?bool  $isCustomer
     * @param  ?bool  $isSupplier
     * @phpstan-pure
     */
    public function __construct(string $id, ?bool $isCustomer = null, ?bool $isSupplier = null)
    {
        $this->id = $id;
        $this->isCustomer = $isCustomer;
        $this->isSupplier = $isSupplier;
    }
}
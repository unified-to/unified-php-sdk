<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingContactPaymentMethod
{
    /**
     *
     * @var AccountingContactPaymentMethodType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AccountingContactPaymentMethodType')]
    public AccountingContactPaymentMethodType $type;

    /**
     *
     * @var ?bool $default
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('default')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $default = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * @param  AccountingContactPaymentMethodType  $type
     * @param  ?bool  $default
     * @param  ?string  $id
     * @param  ?string  $name
     * @phpstan-pure
     */
    public function __construct(AccountingContactPaymentMethodType $type, ?bool $default = null, ?string $id = null, ?string $name = null)
    {
        $this->type = $type;
        $this->default = $default;
        $this->id = $id;
        $this->name = $name;
    }
}
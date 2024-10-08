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
     * @var ?bool $default
     */
    #[\JMS\Serializer\Annotation\SerializedName('default')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $default = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var AccountingContactPaymentMethodType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AccountingContactPaymentMethodType')]
    public AccountingContactPaymentMethodType $type;

    /**
     * @param  AccountingContactPaymentMethodType  $type
     * @param  ?bool  $default
     * @param  ?string  $id
     * @param  ?string  $name
     */
    public function __construct(AccountingContactPaymentMethodType $type, ?bool $default = null, ?string $id = null, ?string $name = null)
    {
        $this->type = $type;
        $this->default = $default;
        $this->id = $id;
        $this->name = $name;
    }
}
<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class ScimPhoneNumber
{
    /**
     *
     * @var ?string $display
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $display = null;

    /**
     *
     * @var ?bool $primary
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('primary')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $primary = null;

    /**
     *
     * @var ?ScimPhoneNumberType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ScimPhoneNumberType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ScimPhoneNumberType $type = null;

    /**
     *
     * @var ?string $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $value = null;

    /**
     * @param  ?string  $display
     * @param  ?bool  $primary
     * @param  ?ScimPhoneNumberType  $type
     * @param  ?string  $value
     * @phpstan-pure
     */
    public function __construct(?string $display = null, ?bool $primary = null, ?ScimPhoneNumberType $type = null, ?string $value = null)
    {
        $this->display = $display;
        $this->primary = $primary;
        $this->type = $type;
        $this->value = $value;
    }
}
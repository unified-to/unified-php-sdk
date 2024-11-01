<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class Undefined
{
    /**
     *
     * @var ?string $dollarRef
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('$ref')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $dollarRef = null;

    /**
     *
     * @var ?string $display
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $display = null;

    /**
     *
     * @var ?Operation $operation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('operation')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\Operation|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Operation $operation = null;

    /**
     *
     * @var ?UndefinedType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\UndefinedType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UndefinedType $type = null;

    /**
     *
     * @var ?string $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $value = null;

    /**
     * @param  ?string  $dollarRef
     * @param  ?string  $display
     * @param  ?Operation  $operation
     * @param  ?UndefinedType  $type
     * @param  ?string  $value
     */
    public function __construct(?string $dollarRef = null, ?string $display = null, ?Operation $operation = null, ?UndefinedType $type = null, ?string $value = null)
    {
        $this->dollarRef = $dollarRef;
        $this->display = $display;
        $this->operation = $operation;
        $this->type = $type;
        $this->value = $value;
    }
}
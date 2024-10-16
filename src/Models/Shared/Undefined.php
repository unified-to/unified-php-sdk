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
    #[\JMS\Serializer\Annotation\SerializedName('$ref')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $dollarRef = null;

    /**
     *
     * @var ?string $display
     */
    #[\JMS\Serializer\Annotation\SerializedName('display')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $display = null;

    /**
     *
     * @var ?Operation $operation
     */
    #[\JMS\Serializer\Annotation\SerializedName('operation')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\Operation|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Operation $operation = null;

    /**
     *
     * @var ?UndefinedType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\UndefinedType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?UndefinedType $type = null;

    /**
     *
     * @var ?string $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
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
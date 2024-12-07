<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class CommerceItemMetadata
{
    /**
     * $extraData
     *
     * @var ?array<string, mixed> $extraData
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('extra_data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $extraData = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     *
     * @var ?string $namespace
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('namespace')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $namespace = null;

    /**
     *
     * @var ?string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     * $value
     *
     * @var ?array<string, mixed> $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $value = null;

    /**
     * @param  string  $key
     * @param  ?array<string, mixed>  $extraData
     * @param  ?string  $id
     * @param  ?string  $namespace
     * @param  ?string  $type
     * @param  ?array<string, mixed>  $value
     */
    public function __construct(string $key, ?array $extraData = null, ?string $id = null, ?string $namespace = null, ?string $type = null, ?array $value = null)
    {
        $this->key = $key;
        $this->extraData = $extraData;
        $this->id = $id;
        $this->namespace = $namespace;
        $this->type = $type;
        $this->value = $value;
    }
}
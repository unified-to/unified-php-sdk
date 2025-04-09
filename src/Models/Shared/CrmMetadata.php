<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class CrmMetadata
{
    /**
     *
     * @var ?CrmMetadataExtraData $extraData
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('extra_data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\CrmMetadataExtraData|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CrmMetadataExtraData $extraData = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $key = null;

    /**
     *
     * @var ?string $namespace
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('namespace')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $namespace = null;

    /**
     *
     * @var ?string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $slug = null;

    /**
     *
     * @var ?string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     *
     * @var ?CrmMetadataValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\CrmMetadataValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CrmMetadataValue $value = null;

    /**
     * @param  ?CrmMetadataExtraData  $extraData
     * @param  ?string  $id
     * @param  ?string  $key
     * @param  ?string  $namespace
     * @param  ?string  $slug
     * @param  ?string  $type
     * @param  ?CrmMetadataValue  $value
     * @phpstan-pure
     */
    public function __construct(?CrmMetadataExtraData $extraData = null, ?string $id = null, ?string $key = null, ?string $namespace = null, ?string $slug = null, ?string $type = null, ?CrmMetadataValue $value = null)
    {
        $this->extraData = $extraData;
        $this->id = $id;
        $this->key = $key;
        $this->namespace = $namespace;
        $this->slug = $slug;
        $this->type = $type;
        $this->value = $value;
    }
}
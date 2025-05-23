<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class HrisMetadata
{
    /**
     *
     * @var HrisMetadata1|string|HrisMetadataSchemasExtraData22|float|HrisMetadataSchemasExtraData32|bool|HrisMetadataSchemasExtraData2|array<mixed>|HrisMetadataSchemasExtraData52|null $extraData
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('extra_data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\HrisMetadata1|string|\Unified\Unified_to\Models\Shared\HrisMetadataSchemasExtraData22|float|\Unified\Unified_to\Models\Shared\HrisMetadataSchemasExtraData32|bool|\Unified\Unified_to\Models\Shared\HrisMetadataSchemasExtraData2|array<mixed>|\Unified\Unified_to\Models\Shared\HrisMetadataSchemasExtraData52|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public HrisMetadata1|string|HrisMetadataSchemasExtraData22|float|HrisMetadataSchemasExtraData32|bool|HrisMetadataSchemasExtraData2|array|HrisMetadataSchemasExtraData52|null $extraData = null;

    /**
     *
     * @var ?HrisMetadataFormat $format
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('format')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\HrisMetadataFormat|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisMetadataFormat $format = null;

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
     * @var HrisMetadataSchemas1|string|HrisMetadataSchemasValue2|float|HrisMetadataSchemasValue32|bool|HrisMetadataSchemasValue42|array<mixed>|HrisMetadataSchemasValue52|null $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\HrisMetadataSchemas1|string|\Unified\Unified_to\Models\Shared\HrisMetadataSchemasValue2|float|\Unified\Unified_to\Models\Shared\HrisMetadataSchemasValue32|bool|\Unified\Unified_to\Models\Shared\HrisMetadataSchemasValue42|array<mixed>|\Unified\Unified_to\Models\Shared\HrisMetadataSchemasValue52|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public HrisMetadataSchemas1|string|HrisMetadataSchemasValue2|float|HrisMetadataSchemasValue32|bool|HrisMetadataSchemasValue42|array|HrisMetadataSchemasValue52|null $value = null;

    /**
     * @param  HrisMetadata1|string|HrisMetadataSchemasExtraData22|float|HrisMetadataSchemasExtraData32|bool|HrisMetadataSchemasExtraData2|array<mixed>|HrisMetadataSchemasExtraData52|null  $extraData
     * @param  ?HrisMetadataFormat  $format
     * @param  ?string  $id
     * @param  ?string  $key
     * @param  ?string  $namespace
     * @param  ?string  $slug
     * @param  ?string  $type
     * @param  HrisMetadataSchemas1|string|HrisMetadataSchemasValue2|float|HrisMetadataSchemasValue32|bool|HrisMetadataSchemasValue42|array<mixed>|HrisMetadataSchemasValue52|null  $value
     * @phpstan-pure
     */
    public function __construct(HrisMetadata1|string|HrisMetadataSchemasExtraData22|float|HrisMetadataSchemasExtraData32|bool|HrisMetadataSchemasExtraData2|array|HrisMetadataSchemasExtraData52|null $extraData = null, ?HrisMetadataFormat $format = null, ?string $id = null, ?string $key = null, ?string $namespace = null, ?string $slug = null, ?string $type = null, HrisMetadataSchemas1|string|HrisMetadataSchemasValue2|float|HrisMetadataSchemasValue32|bool|HrisMetadataSchemasValue42|array|HrisMetadataSchemasValue52|null $value = null)
    {
        $this->extraData = $extraData;
        $this->format = $format;
        $this->id = $id;
        $this->key = $key;
        $this->namespace = $namespace;
        $this->slug = $slug;
        $this->type = $type;
        $this->value = $value;
    }
}
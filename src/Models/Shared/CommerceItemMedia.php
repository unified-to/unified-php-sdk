<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class CommerceItemMedia
{
    /**
     *
     * @var ?string $alt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('alt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $alt = null;

    /**
     *
     * @var ?float $height
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('height')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $height = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * $metadata
     *
     * @var ?array<CommerceItemMetadata> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\CommerceItemMetadata>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     *
     * @var ?float $position
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('position')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $position = null;

    /**
     *
     * @var ?CommerceItemMediaType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\CommerceItemMediaType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CommerceItemMediaType $type = null;

    /**
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     *
     * @var ?float $width
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('width')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $width = null;

    /**
     * @param  string  $url
     * @param  ?string  $alt
     * @param  ?float  $height
     * @param  ?string  $id
     * @param  ?array<CommerceItemMetadata>  $metadata
     * @param  ?float  $position
     * @param  ?CommerceItemMediaType  $type
     * @param  ?float  $width
     */
    public function __construct(string $url, ?string $alt = null, ?float $height = null, ?string $id = null, ?array $metadata = null, ?float $position = null, ?CommerceItemMediaType $type = null, ?float $width = null)
    {
        $this->url = $url;
        $this->alt = $alt;
        $this->height = $height;
        $this->id = $id;
        $this->metadata = $metadata;
        $this->position = $position;
        $this->type = $type;
        $this->width = $width;
    }
}
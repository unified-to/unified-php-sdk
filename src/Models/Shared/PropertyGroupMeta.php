<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class PropertyGroupMeta
{
    /**
     *
     * @var ?string $created
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $created = null;

    /**
     *
     * @var ?string $lastModified
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lastModified')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastModified = null;

    /**
     *
     * @var ?string $location
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $location = null;

    /**
     *
     * @var ?ResourceType $resourceType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('resourceType')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ResourceType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ResourceType $resourceType = null;

    /**
     *
     * @var ?string $version
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $version = null;

    /**
     * @param  ?string  $created
     * @param  ?string  $lastModified
     * @param  ?string  $location
     * @param  ?ResourceType  $resourceType
     * @param  ?string  $version
     */
    public function __construct(?string $created = null, ?string $lastModified = null, ?string $location = null, ?ResourceType $resourceType = null, ?string $version = null)
    {
        $this->created = $created;
        $this->lastModified = $lastModified;
        $this->location = $location;
        $this->resourceType = $resourceType;
        $this->version = $version;
    }
}
<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class ScimGroup
{
    /**
     *
     * @var string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('displayName')]
    public string $displayName;

    /**
     *
     * @var ?string $externalId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('externalId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $externalId = null;

    /**
     *
     * @var ?string $groupType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('groupType')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $groupType = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * An array of members
     *
     * @var ?array<ScimGroupMember> $members
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('members')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\ScimGroupMember>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $members = null;

    /**
     *
     * @var ?PropertyScimGroupMeta $meta
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meta')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyScimGroupMeta|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyScimGroupMeta $meta = null;

    /**
     * Array of schema URIs
     *
     * @var ?array<PropertyScimGroupSchemas> $schemas
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('schemas')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\PropertyScimGroupSchemas>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $schemas = null;

    /**
     * @param  string  $displayName
     * @param  ?string  $externalId
     * @param  ?string  $groupType
     * @param  ?string  $id
     * @param  ?array<ScimGroupMember>  $members
     * @param  ?PropertyScimGroupMeta  $meta
     * @param  ?array<PropertyScimGroupSchemas>  $schemas
     */
    public function __construct(string $displayName, ?string $externalId = null, ?string $groupType = null, ?string $id = null, ?array $members = null, ?PropertyScimGroupMeta $meta = null, ?array $schemas = null)
    {
        $this->displayName = $displayName;
        $this->externalId = $externalId;
        $this->groupType = $groupType;
        $this->id = $id;
        $this->members = $members;
        $this->meta = $meta;
        $this->schemas = $schemas;
    }
}
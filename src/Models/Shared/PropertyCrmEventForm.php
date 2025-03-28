<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class PropertyCrmEventForm
{
    /**
     *
     * @var ?\DateTime $archivedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('archived_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $archivedAt = null;

    /**
     * $fields
     *
     * @var ?array<CrmEventFormField> $fields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\CrmEventFormField>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $fields = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $redirectUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('redirect_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $redirectUrl = null;

    /**
     * @param  ?\DateTime  $archivedAt
     * @param  ?array<CrmEventFormField>  $fields
     * @param  ?string  $name
     * @param  ?string  $redirectUrl
     * @phpstan-pure
     */
    public function __construct(?\DateTime $archivedAt = null, ?array $fields = null, ?string $name = null, ?string $redirectUrl = null)
    {
        $this->archivedAt = $archivedAt;
        $this->fields = $fields;
        $this->name = $name;
        $this->redirectUrl = $redirectUrl;
    }
}
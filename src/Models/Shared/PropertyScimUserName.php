<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class PropertyScimUserName
{
    /**
     *
     * @var ?string $familyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('familyName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $familyName = null;

    /**
     *
     * @var ?string $formatted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('formatted')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $formatted = null;

    /**
     *
     * @var ?string $givenName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('givenName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $givenName = null;

    /**
     *
     * @var ?string $honorificPrefix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('honorificPrefix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $honorificPrefix = null;

    /**
     *
     * @var ?string $honorificSuffix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('honorificSuffix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $honorificSuffix = null;

    /**
     *
     * @var ?string $middleName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('middleName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $middleName = null;

    /**
     * @param  ?string  $familyName
     * @param  ?string  $formatted
     * @param  ?string  $givenName
     * @param  ?string  $honorificPrefix
     * @param  ?string  $honorificSuffix
     * @param  ?string  $middleName
     */
    public function __construct(?string $familyName = null, ?string $formatted = null, ?string $givenName = null, ?string $honorificPrefix = null, ?string $honorificSuffix = null, ?string $middleName = null)
    {
        $this->familyName = $familyName;
        $this->formatted = $formatted;
        $this->givenName = $givenName;
        $this->honorificPrefix = $honorificPrefix;
        $this->honorificSuffix = $honorificSuffix;
        $this->middleName = $middleName;
    }
}
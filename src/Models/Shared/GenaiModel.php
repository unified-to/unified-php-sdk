<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class GenaiModel
{
    /**
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?bool $hasTemperature
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('has_temperature')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasTemperature = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?float $maxTokens
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('max_tokens')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $maxTokens = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     *
     * @var ?string $webUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('web_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $webUrl = null;

    /**
     * @param  ?string  $description
     * @param  ?bool  $hasTemperature
     * @param  ?string  $id
     * @param  ?float  $maxTokens
     * @param  ?string  $name
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $webUrl
     * @phpstan-pure
     */
    public function __construct(?string $description = null, ?bool $hasTemperature = null, ?string $id = null, ?float $maxTokens = null, ?string $name = null, ?array $raw = null, ?string $webUrl = null)
    {
        $this->description = $description;
        $this->hasTemperature = $hasTemperature;
        $this->id = $id;
        $this->maxTokens = $maxTokens;
        $this->name = $name;
        $this->raw = $raw;
        $this->webUrl = $webUrl;
    }
}
<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class GenaiContent
{
    /**
     *
     * @var string $content
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('content')]
    public string $content;

    /**
     *
     * @var ?Role $role
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('role')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\Role|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Role $role = null;

    /**
     * @param  string  $content
     * @param  ?Role  $role
     */
    public function __construct(string $content, ?Role $role = null)
    {
        $this->content = $content;
        $this->role = $role;
    }
}
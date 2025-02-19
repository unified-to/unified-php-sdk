<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class HrisEmail
{
    /**
     *
     * @var string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     *
     * @var ?HrisEmailType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\HrisEmailType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisEmailType $type = null;

    /**
     * @param  string  $email
     * @param  ?HrisEmailType  $type
     * @phpstan-pure
     */
    public function __construct(string $email, ?HrisEmailType $type = null)
    {
        $this->email = $email;
        $this->type = $type;
    }
}
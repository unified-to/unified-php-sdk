<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class MarketingEmail
{
    /**
     *
     * @var string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     *
     * @var ?MarketingEmailType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\MarketingEmailType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MarketingEmailType $type = null;

    /**
     * @param  string  $email
     * @param  ?MarketingEmailType  $type
     */
    public function __construct(string $email, ?MarketingEmailType $type = null)
    {
        $this->email = $email;
        $this->type = $type;
    }
}
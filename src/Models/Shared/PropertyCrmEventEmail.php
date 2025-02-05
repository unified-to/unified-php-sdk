<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** PropertyCrmEventEmail - The email object, when type = email */
class PropertyCrmEventEmail
{
    /**
     * $attachmentFileIds
     *
     * @var ?array<string> $attachmentFileIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('attachment_file_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $attachmentFileIds = null;

    /**
     *
     * @var ?string $body
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('body')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $body = null;

    /**
     * The event email's cc name & email (name <test@test.com>)
     *
     * @var ?array<string> $cc
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cc')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $cc = null;

    /**
     *
     * @var ?string $from
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('from')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $from = null;

    /**
     *
     * @var ?string $subject
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subject')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subject = null;

    /**
     * The event email's "to" name & email (name <test@test.com>)
     *
     * @var ?array<string> $to
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('to')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $to = null;

    /**
     * @param  ?array<string>  $attachmentFileIds
     * @param  ?string  $body
     * @param  ?array<string>  $cc
     * @param  ?string  $from
     * @param  ?string  $subject
     * @param  ?array<string>  $to
     * @phpstan-pure
     */
    public function __construct(?array $attachmentFileIds = null, ?string $body = null, ?array $cc = null, ?string $from = null, ?string $subject = null, ?array $to = null)
    {
        $this->attachmentFileIds = $attachmentFileIds;
        $this->body = $body;
        $this->cc = $cc;
        $this->from = $from;
        $this->subject = $subject;
        $this->to = $to;
    }
}
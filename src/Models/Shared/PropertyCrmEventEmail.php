<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
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
    #[\JMS\Serializer\Annotation\SerializedName('attachment_file_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $attachmentFileIds = null;

    #[\JMS\Serializer\Annotation\SerializedName('body')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $body = null;

    /**
     * The event email's cc name & email (name <test@test.com>)
     *
     * @var ?array<string> $cc
     */
    #[\JMS\Serializer\Annotation\SerializedName('cc')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $cc = null;

    #[\JMS\Serializer\Annotation\SerializedName('from')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $from = null;

    #[\JMS\Serializer\Annotation\SerializedName('subject')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subject = null;

    /**
     * The event email's "to" name & email (name <test@test.com>)
     *
     * @var ?array<string> $to
     */
    #[\JMS\Serializer\Annotation\SerializedName('to')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $to = null;

    public function __construct()
    {
        $this->attachmentFileIds = null;
        $this->body = null;
        $this->cc = null;
        $this->from = null;
        $this->subject = null;
        $this->to = null;
    }
}
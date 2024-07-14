<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class MessagingAttachment
{
    #[\JMS\Serializer\Annotation\SerializedName('content_type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $contentType = null;

    #[\JMS\Serializer\Annotation\SerializedName('download_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $downloadUrl = null;

    #[\JMS\Serializer\Annotation\SerializedName('filename')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $filename = null;

    #[\JMS\Serializer\Annotation\SerializedName('message_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $messageId = null;

    #[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $size = null;

    public function __construct()
    {
        $this->contentType = null;
        $this->downloadUrl = null;
        $this->filename = null;
        $this->messageId = null;
        $this->size = null;
    }
}
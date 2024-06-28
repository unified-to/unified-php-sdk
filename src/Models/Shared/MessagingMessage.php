<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class MessagingMessage
{
    #[\JMS\Serializer\Annotation\SerializedName('author_member')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyMessagingMessageAuthorMember')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyMessagingMessageAuthorMember $authorMember = null;

    #[\JMS\Serializer\Annotation\SerializedName('channel_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $channelId = null;

    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $createdAt = null;

    /**
     * $destinationMembers
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\MessagingMember> $destinationMembers
     */
    #[\JMS\Serializer\Annotation\SerializedName('destination_members')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\MessagingMember>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $destinationMembers = null;

    /**
     * $hiddenMembers
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\MessagingMember> $hiddenMembers
     */
    #[\JMS\Serializer\Annotation\SerializedName('hidden_members')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\MessagingMember>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $hiddenMembers = null;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    /**
     * $mentionedMembers
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\MessagingMember> $mentionedMembers
     */
    #[\JMS\Serializer\Annotation\SerializedName('mentioned_members')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\MessagingMember>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $mentionedMembers = null;

    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;

    #[\JMS\Serializer\Annotation\SerializedName('message_html')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $messageHtml = null;

    #[\JMS\Serializer\Annotation\SerializedName('parent_message_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentMessageId = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $raw = null;

    #[\JMS\Serializer\Annotation\SerializedName('subject')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subject = null;

    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $updatedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('web_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $webUrl = null;

    public function __construct()
    {
        $this->authorMember = null;
        $this->channelId = null;
        $this->createdAt = null;
        $this->destinationMembers = null;
        $this->hiddenMembers = null;
        $this->id = null;
        $this->mentionedMembers = null;
        $this->message = '';
        $this->messageHtml = null;
        $this->parentMessageId = null;
        $this->raw = null;
        $this->subject = null;
        $this->updatedAt = null;
        $this->webUrl = null;
    }
}
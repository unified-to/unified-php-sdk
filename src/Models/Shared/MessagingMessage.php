<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class MessagingMessage
{
    /**
     * $attachments
     *
     * @var ?array<MessagingAttachment> $attachments
     */
    #[\JMS\Serializer\Annotation\SerializedName('attachments')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\MessagingAttachment>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $attachments = null;

    /**
     *
     * @var ?PropertyMessagingMessageAuthorMember $authorMember
     */
    #[\JMS\Serializer\Annotation\SerializedName('author_member')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyMessagingMessageAuthorMember')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyMessagingMessageAuthorMember $authorMember = null;

    /**
     *
     * @var ?string $channelId
     */
    #[\JMS\Serializer\Annotation\SerializedName('channel_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $channelId = null;

    /**
     *
     * @var ?string $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $createdAt = null;

    /**
     * $destinationMembers
     *
     * @var ?array<MessagingMember> $destinationMembers
     */
    #[\JMS\Serializer\Annotation\SerializedName('destination_members')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\MessagingMember>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $destinationMembers = null;

    /**
     * $hiddenMembers
     *
     * @var ?array<MessagingMember> $hiddenMembers
     */
    #[\JMS\Serializer\Annotation\SerializedName('hidden_members')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\MessagingMember>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $hiddenMembers = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    /**
     * $mentionedMembers
     *
     * @var ?array<MessagingMember> $mentionedMembers
     */
    #[\JMS\Serializer\Annotation\SerializedName('mentioned_members')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\MessagingMember>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $mentionedMembers = null;

    /**
     *
     * @var ?string $message
     */
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;

    /**
     *
     * @var ?string $messageHtml
     */
    #[\JMS\Serializer\Annotation\SerializedName('message_html')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $messageHtml = null;

    /**
     *
     * @var ?string $parentMessageId
     */
    #[\JMS\Serializer\Annotation\SerializedName('parent_message_id')]
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

    /**
     *
     * @var ?string $subject
     */
    #[\JMS\Serializer\Annotation\SerializedName('subject')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subject = null;

    /**
     *
     * @var ?string $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $updatedAt = null;

    /**
     *
     * @var ?string $webUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('web_url')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $webUrl = null;

    /**
     * @param  ?array<MessagingAttachment>  $attachments
     * @param  ?PropertyMessagingMessageAuthorMember  $authorMember
     * @param  ?string  $channelId
     * @param  ?string  $createdAt
     * @param  ?array<MessagingMember>  $destinationMembers
     * @param  ?array<MessagingMember>  $hiddenMembers
     * @param  ?string  $id
     * @param  ?array<MessagingMember>  $mentionedMembers
     * @param  ?string  $message
     * @param  ?string  $messageHtml
     * @param  ?string  $parentMessageId
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $subject
     * @param  ?string  $updatedAt
     * @param  ?string  $webUrl
     */
    public function __construct(?array $attachments = null, ?PropertyMessagingMessageAuthorMember $authorMember = null, ?string $channelId = null, ?string $createdAt = null, ?array $destinationMembers = null, ?array $hiddenMembers = null, ?string $id = null, ?array $mentionedMembers = null, ?string $message = null, ?string $messageHtml = null, ?string $parentMessageId = null, ?array $raw = null, ?string $subject = null, ?string $updatedAt = null, ?string $webUrl = null)
    {
        $this->attachments = $attachments;
        $this->authorMember = $authorMember;
        $this->channelId = $channelId;
        $this->createdAt = $createdAt;
        $this->destinationMembers = $destinationMembers;
        $this->hiddenMembers = $hiddenMembers;
        $this->id = $id;
        $this->mentionedMembers = $mentionedMembers;
        $this->message = $message;
        $this->messageHtml = $messageHtml;
        $this->parentMessageId = $parentMessageId;
        $this->raw = $raw;
        $this->subject = $subject;
        $this->updatedAt = $updatedAt;
        $this->webUrl = $webUrl;
    }
}
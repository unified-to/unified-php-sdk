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
    #[\Speakeasy\Serializer\Annotation\SerializedName('attachments')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\MessagingAttachment>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $attachments = null;

    /**
     *
     * @var ?PropertyMessagingMessageAuthorMember $authorMember
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('author_member')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyMessagingMessageAuthorMember|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyMessagingMessageAuthorMember $authorMember = null;

    /**
     *
     * @var ?string $channelId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('channel_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $channelId = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * $destinationMembers
     *
     * @var ?array<MessagingMember> $destinationMembers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('destination_members')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\MessagingMember>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $destinationMembers = null;

    /**
     * $hiddenMembers
     *
     * @var ?array<MessagingMember> $hiddenMembers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hidden_members')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\MessagingMember>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $hiddenMembers = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * $mentionedMembers
     *
     * @var ?array<MessagingMember> $mentionedMembers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mentioned_members')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\MessagingMember>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $mentionedMembers = null;

    /**
     *
     * @var ?string $message
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $message = null;

    /**
     *
     * @var ?string $messageHtml
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message_html')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $messageHtml = null;

    /**
     *
     * @var ?string $parentMessageId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_message_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentMessageId = null;

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
     * @var ?string $reference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reference = null;

    /**
     *
     * @var ?string $rootMessageId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('root_message_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $rootMessageId = null;

    /**
     *
     * @var ?string $subject
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subject')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subject = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?string $webUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('web_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $webUrl = null;

    /**
     * @param  ?array<MessagingAttachment>  $attachments
     * @param  ?PropertyMessagingMessageAuthorMember  $authorMember
     * @param  ?string  $channelId
     * @param  ?\DateTime  $createdAt
     * @param  ?array<MessagingMember>  $destinationMembers
     * @param  ?array<MessagingMember>  $hiddenMembers
     * @param  ?string  $id
     * @param  ?array<MessagingMember>  $mentionedMembers
     * @param  ?string  $message
     * @param  ?string  $messageHtml
     * @param  ?string  $parentMessageId
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $reference
     * @param  ?string  $rootMessageId
     * @param  ?string  $subject
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $webUrl
     */
    public function __construct(?array $attachments = null, ?PropertyMessagingMessageAuthorMember $authorMember = null, ?string $channelId = null, ?\DateTime $createdAt = null, ?array $destinationMembers = null, ?array $hiddenMembers = null, ?string $id = null, ?array $mentionedMembers = null, ?string $message = null, ?string $messageHtml = null, ?string $parentMessageId = null, ?array $raw = null, ?string $reference = null, ?string $rootMessageId = null, ?string $subject = null, ?\DateTime $updatedAt = null, ?string $webUrl = null)
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
        $this->reference = $reference;
        $this->rootMessageId = $rootMessageId;
        $this->subject = $subject;
        $this->updatedAt = $updatedAt;
        $this->webUrl = $webUrl;
    }
}
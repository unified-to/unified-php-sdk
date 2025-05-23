<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class TicketingTicket
{
    /**
     *
     * @var ?string $category
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('category')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $category = null;

    /**
     *
     * @var ?\DateTime $closedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('closed_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $closedAt = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $customerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerId = null;

    /**
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $priority
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('priority')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $priority = null;

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
     * @var ?string $source
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $source = null;

    /**
     *
     * @var ?string $sourceRef
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_ref')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sourceRef = null;

    /**
     *
     * @var ?TicketingTicketStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\TicketingTicketStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TicketingTicketStatus $status = null;

    /**
     *
     * @var ?string $subject
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subject')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subject = null;

    /**
     * $tags
     *
     * @var ?array<string> $tags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $tags = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     *
     * @var ?string $userId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $userId = null;

    /**
     * @param  ?string  $category
     * @param  ?\DateTime  $closedAt
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $customerId
     * @param  ?string  $description
     * @param  ?string  $id
     * @param  ?string  $priority
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $source
     * @param  ?string  $sourceRef
     * @param  ?TicketingTicketStatus  $status
     * @param  ?string  $subject
     * @param  ?array<string>  $tags
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $url
     * @param  ?string  $userId
     * @phpstan-pure
     */
    public function __construct(?string $category = null, ?\DateTime $closedAt = null, ?\DateTime $createdAt = null, ?string $customerId = null, ?string $description = null, ?string $id = null, ?string $priority = null, ?array $raw = null, ?string $source = null, ?string $sourceRef = null, ?TicketingTicketStatus $status = null, ?string $subject = null, ?array $tags = null, ?\DateTime $updatedAt = null, ?string $url = null, ?string $userId = null)
    {
        $this->category = $category;
        $this->closedAt = $closedAt;
        $this->createdAt = $createdAt;
        $this->customerId = $customerId;
        $this->description = $description;
        $this->id = $id;
        $this->priority = $priority;
        $this->raw = $raw;
        $this->source = $source;
        $this->sourceRef = $sourceRef;
        $this->status = $status;
        $this->subject = $subject;
        $this->tags = $tags;
        $this->updatedAt = $updatedAt;
        $this->url = $url;
        $this->userId = $userId;
    }
}
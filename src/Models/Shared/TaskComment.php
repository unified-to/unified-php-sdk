<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class TaskComment
{
    /**
     *
     * @var string $taskId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('task_id')]
    public string $taskId;

    /**
     *
     * @var string $text
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('text')]
    public string $text;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

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
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?string $userId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $userId = null;

    /**
     *
     * @var ?string $userName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $userName = null;

    /**
     * @param  string  $taskId
     * @param  string  $text
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $id
     * @param  ?array<string, mixed>  $raw
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $userId
     * @param  ?string  $userName
     */
    public function __construct(string $taskId, string $text, ?\DateTime $createdAt = null, ?string $id = null, ?array $raw = null, ?\DateTime $updatedAt = null, ?string $userId = null, ?string $userName = null)
    {
        $this->taskId = $taskId;
        $this->text = $text;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->raw = $raw;
        $this->updatedAt = $updatedAt;
        $this->userId = $userId;
        $this->userName = $userName;
    }
}
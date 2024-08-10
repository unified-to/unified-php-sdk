<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class GenaiPrompt
{
    /**
     *
     * @var ?float $maxTokens
     */
    #[\JMS\Serializer\Annotation\SerializedName('max_tokens')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $maxTokens = null;

    /**
     * $messages
     *
     * @var ?array<GenaiContent> $messages
     */
    #[\JMS\Serializer\Annotation\SerializedName('messages')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\GenaiContent>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $messages = null;

    /**
     *
     * @var ?string $modelId
     */
    #[\JMS\Serializer\Annotation\SerializedName('model_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $modelId = null;

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
     * $responses
     *
     * @var ?array<string> $responses
     */
    #[\JMS\Serializer\Annotation\SerializedName('responses')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $responses = null;

    /**
     *
     * @var ?float $temperature
     */
    #[\JMS\Serializer\Annotation\SerializedName('temperature')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $temperature = null;

    /**
     * @param  ?float  $maxTokens
     * @param  ?array<GenaiContent>  $messages
     * @param  ?string  $modelId
     * @param  ?array<string, mixed>  $raw
     * @param  ?array<string>  $responses
     * @param  ?float  $temperature
     */
    public function __construct(?float $maxTokens = null, ?array $messages = null, ?string $modelId = null, ?array $raw = null, ?array $responses = null, ?float $temperature = null)
    {
        $this->maxTokens = $maxTokens;
        $this->messages = $messages;
        $this->modelId = $modelId;
        $this->raw = $raw;
        $this->responses = $responses;
        $this->temperature = $temperature;
    }
}
<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsJobQuestion
{
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
     * $options
     *
     * @var ?array<string> $options
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('options')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $options = null;

    /**
     *
     * @var ?string $prompt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('prompt')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $prompt = null;

    /**
     *
     * @var string $question
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('question')]
    public string $question;

    /**
     *
     * @var ?bool $required
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('required')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $required = null;

    /**
     *
     * @var AtsJobQuestionType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AtsJobQuestionType')]
    public AtsJobQuestionType $type;

    /**
     * @param  string  $question
     * @param  AtsJobQuestionType  $type
     * @param  ?string  $description
     * @param  ?string  $id
     * @param  ?array<string>  $options
     * @param  ?string  $prompt
     * @param  ?bool  $required
     */
    public function __construct(string $question, AtsJobQuestionType $type, ?string $description = null, ?string $id = null, ?array $options = null, ?string $prompt = null, ?bool $required = null)
    {
        $this->question = $question;
        $this->type = $type;
        $this->description = $description;
        $this->id = $id;
        $this->options = $options;
        $this->prompt = $prompt;
        $this->required = $required;
    }
}
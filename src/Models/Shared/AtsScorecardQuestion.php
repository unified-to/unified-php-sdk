<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsScorecardQuestion
{
    /**
     *
     * @var ?string $answer
     */
    #[\JMS\Serializer\Annotation\SerializedName('answer')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $answer = null;

    /**
     *
     * @var ?string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;

    /**
     *
     * @var string $text
     */
    #[\JMS\Serializer\Annotation\SerializedName('text')]
    public string $text;

    /**
     * @param  ?string  $text
     * @param  ?string  $answer
     * @param  ?string  $description
     */
    public function __construct(?string $text = null, ?string $answer = null, ?string $description = null)
    {
        $this->text = $text;
        $this->answer = $answer;
        $this->description = $description;
    }
}
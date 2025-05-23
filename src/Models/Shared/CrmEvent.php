<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** CrmEvent - An event represents an event, activity, or engagement and is always associated with a deal, contact, or company */
class CrmEvent
{
    /**
     * The call object, when type = call
     *
     * @var ?PropertyCrmEventCall $call
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('call')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmEventCall|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmEventCall $call = null;

    /**
     * An array of company IDs associated with this event
     *
     * @var ?array<string> $companyIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $companyIds = null;

    /**
     * An array of contact IDs associated with this event
     *
     * @var ?array<string> $contactIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contact_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $contactIds = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * An array of deal IDs associated with this event
     *
     * @var ?array<string> $dealIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deal_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $dealIds = null;

    /**
     * The email object, when type = email
     *
     * @var ?PropertyCrmEventEmail $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmEventEmail|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmEventEmail $email = null;

    /**
     *
     * @var ?PropertyCrmEventForm $form
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('form')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmEventForm|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmEventForm $form = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * $leadIds
     *
     * @var ?array<string> $leadIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lead_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $leadIds = null;

    /**
     *
     * @var ?PropertyCrmEventMarketingEmail $marketingEmail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('marketing_email')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmEventMarketingEmail|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmEventMarketingEmail $marketingEmail = null;

    /**
     * The meeting object, when type = meeting
     *
     * @var ?PropertyCrmEventMeeting $meeting
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meeting')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmEventMeeting $meeting = null;

    /**
     * The note object, when type = note
     *
     * @var ?PropertyCrmEventNote $note
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('note')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmEventNote|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmEventNote $note = null;

    /**
     *
     * @var ?PropertyCrmEventPageView $pageView
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('page_view')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmEventPageView|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmEventPageView $pageView = null;

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
     * The task object, when type = task
     *
     * @var ?PropertyCrmEventTask $task
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('task')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmEventTask|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmEventTask $task = null;

    /**
     *
     * @var ?CrmEventType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\CrmEventType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CrmEventType $type = null;

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
     * @param  ?PropertyCrmEventCall  $call
     * @param  ?array<string>  $companyIds
     * @param  ?array<string>  $contactIds
     * @param  ?\DateTime  $createdAt
     * @param  ?array<string>  $dealIds
     * @param  ?PropertyCrmEventEmail  $email
     * @param  ?PropertyCrmEventForm  $form
     * @param  ?string  $id
     * @param  ?array<string>  $leadIds
     * @param  ?PropertyCrmEventMarketingEmail  $marketingEmail
     * @param  ?PropertyCrmEventMeeting  $meeting
     * @param  ?PropertyCrmEventNote  $note
     * @param  ?PropertyCrmEventPageView  $pageView
     * @param  ?array<string, mixed>  $raw
     * @param  ?PropertyCrmEventTask  $task
     * @param  ?CrmEventType  $type
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $userId
     * @phpstan-pure
     */
    public function __construct(?PropertyCrmEventCall $call = null, ?array $companyIds = null, ?array $contactIds = null, ?\DateTime $createdAt = null, ?array $dealIds = null, ?PropertyCrmEventEmail $email = null, ?PropertyCrmEventForm $form = null, ?string $id = null, ?array $leadIds = null, ?PropertyCrmEventMarketingEmail $marketingEmail = null, ?PropertyCrmEventMeeting $meeting = null, ?PropertyCrmEventNote $note = null, ?PropertyCrmEventPageView $pageView = null, ?array $raw = null, ?PropertyCrmEventTask $task = null, ?CrmEventType $type = null, ?\DateTime $updatedAt = null, ?string $userId = null)
    {
        $this->call = $call;
        $this->companyIds = $companyIds;
        $this->contactIds = $contactIds;
        $this->createdAt = $createdAt;
        $this->dealIds = $dealIds;
        $this->email = $email;
        $this->form = $form;
        $this->id = $id;
        $this->leadIds = $leadIds;
        $this->marketingEmail = $marketingEmail;
        $this->meeting = $meeting;
        $this->note = $note;
        $this->pageView = $pageView;
        $this->raw = $raw;
        $this->task = $task;
        $this->type = $type;
        $this->updatedAt = $updatedAt;
        $this->userId = $userId;
    }
}
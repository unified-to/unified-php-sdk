<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class IntegrationSupport
{
    /**
     * $inboundFields
     *
     * @var ?array<string, mixed> $inboundFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('inbound_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $inboundFields = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_account_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listAccountId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_application_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listApplicationId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_candidate_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listCandidateId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_collection_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listCollectionId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_company_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listCompanyId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_contact_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listContactId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_customer_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listCustomerId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_deal_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listDealId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_interview_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listInterviewId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_invoice_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listInvoiceId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_item_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listItemId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_job_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listJobId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_limit')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listLimit = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_list_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listListId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_location_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listLocationId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_offset')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listOffset = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_order')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listOrder = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_parent_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listParentId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_query')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listQuery = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_sort_by_created_at')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listSortByCreatedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_sort_by_name')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listSortByName = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_sort_by_updated_at')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listSortByUpdatedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_ticket_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listTicketId = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_type')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listType = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_updated_gte')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listUpdatedGte = null;

    #[\JMS\Serializer\Annotation\SerializedName('list_user_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listUserId = null;

    /**
     * $methods
     *
     * @var ?array<string, bool> $methods
     */
    #[\JMS\Serializer\Annotation\SerializedName('methods')]
    #[\JMS\Serializer\Annotation\Type('array<string, bool>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $methods = null;

    /**
     * $outboundFields
     *
     * @var ?array<string, mixed> $outboundFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('outbound_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $outboundFields = null;

    #[\JMS\Serializer\Annotation\SerializedName('search_domain')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $searchDomain = null;

    #[\JMS\Serializer\Annotation\SerializedName('search_email')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $searchEmail = null;

    #[\JMS\Serializer\Annotation\SerializedName('search_linkedinurl')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $searchLinkedinurl = null;

    #[\JMS\Serializer\Annotation\SerializedName('search_name')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $searchName = null;

    #[\JMS\Serializer\Annotation\SerializedName('search_twitter')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $searchTwitter = null;

    #[\JMS\Serializer\Annotation\SerializedName('webhook_events')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyIntegrationSupportWebhookEvents')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyIntegrationSupportWebhookEvents $webhookEvents = null;

    public function __construct()
    {
        $this->inboundFields = null;
        $this->listAccountId = null;
        $this->listApplicationId = null;
        $this->listCandidateId = null;
        $this->listCollectionId = null;
        $this->listCompanyId = null;
        $this->listContactId = null;
        $this->listCustomerId = null;
        $this->listDealId = null;
        $this->listInterviewId = null;
        $this->listInvoiceId = null;
        $this->listItemId = null;
        $this->listJobId = null;
        $this->listLimit = null;
        $this->listListId = null;
        $this->listLocationId = null;
        $this->listOffset = null;
        $this->listOrder = null;
        $this->listParentId = null;
        $this->listQuery = null;
        $this->listSortByCreatedAt = null;
        $this->listSortByName = null;
        $this->listSortByUpdatedAt = null;
        $this->listTicketId = null;
        $this->listType = null;
        $this->listUpdatedGte = null;
        $this->listUserId = null;
        $this->methods = null;
        $this->outboundFields = null;
        $this->searchDomain = null;
        $this->searchEmail = null;
        $this->searchLinkedinurl = null;
        $this->searchName = null;
        $this->searchTwitter = null;
        $this->webhookEvents = null;
    }
}
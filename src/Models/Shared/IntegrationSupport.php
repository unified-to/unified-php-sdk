<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class IntegrationSupport
{
    /**
     *
     * @var ?FromWebhook $fromWebhook
     */
    #[\JMS\Serializer\Annotation\SerializedName('from_webhook')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\FromWebhook')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?FromWebhook $fromWebhook = null;

    /**
     * $inboundFields
     *
     * @var ?array<string, mixed> $inboundFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('inbound_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $inboundFields = null;

    /**
     *
     * @var ?ListAccountId $listAccountId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_account_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListAccountId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListAccountId $listAccountId = null;

    /**
     *
     * @var ?ListApplicationId $listApplicationId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_application_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListApplicationId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListApplicationId $listApplicationId = null;

    /**
     *
     * @var ?ListCandidateId $listCandidateId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_candidate_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListCandidateId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListCandidateId $listCandidateId = null;

    /**
     *
     * @var ?ListChannelId $listChannelId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_channel_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListChannelId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListChannelId $listChannelId = null;

    /**
     *
     * @var ?ListCollectionId $listCollectionId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_collection_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListCollectionId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListCollectionId $listCollectionId = null;

    /**
     *
     * @var ?ListCompanyId $listCompanyId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_company_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListCompanyId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListCompanyId $listCompanyId = null;

    /**
     *
     * @var ?ListContactId $listContactId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_contact_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListContactId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListContactId $listContactId = null;

    /**
     *
     * @var ?ListCustomerId $listCustomerId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_customer_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListCustomerId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListCustomerId $listCustomerId = null;

    /**
     *
     * @var ?ListDealId $listDealId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_deal_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListDealId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListDealId $listDealId = null;

    /**
     *
     * @var ?ListInterviewId $listInterviewId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_interview_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListInterviewId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListInterviewId $listInterviewId = null;

    /**
     *
     * @var ?ListInvoiceId $listInvoiceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_invoice_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListInvoiceId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListInvoiceId $listInvoiceId = null;

    /**
     *
     * @var ?ListItemId $listItemId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_item_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListItemId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListItemId $listItemId = null;

    /**
     *
     * @var ?ListItemVariantId $listItemVariantId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_item_variant_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListItemVariantId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListItemVariantId $listItemVariantId = null;

    /**
     *
     * @var ?ListJobId $listJobId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_job_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListJobId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListJobId $listJobId = null;

    /**
     *
     * @var ?ListLimit $listLimit
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_limit')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListLimit')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListLimit $listLimit = null;

    /**
     *
     * @var ?ListLinkId $listLinkId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_link_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListLinkId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListLinkId $listLinkId = null;

    /**
     *
     * @var ?ListListId $listListId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_list_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListListId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListListId $listListId = null;

    /**
     *
     * @var ?ListLocationId $listLocationId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_location_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListLocationId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListLocationId $listLocationId = null;

    /**
     *
     * @var ?ListOffset $listOffset
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_offset')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListOffset')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListOffset $listOffset = null;

    /**
     *
     * @var ?ListOrder $listOrder
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_order')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListOrder')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListOrder $listOrder = null;

    /**
     *
     * @var ?ListParentId $listParentId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_parent_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListParentId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListParentId $listParentId = null;

    /**
     *
     * @var ?ListProjectId $listProjectId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_project_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListProjectId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListProjectId $listProjectId = null;

    /**
     *
     * @var ?ListQuery $listQuery
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_query')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListQuery')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListQuery $listQuery = null;

    /**
     *
     * @var ?ListSortByCreatedAt $listSortByCreatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_sort_by_created_at')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListSortByCreatedAt')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListSortByCreatedAt $listSortByCreatedAt = null;

    /**
     *
     * @var ?ListSortByName $listSortByName
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_sort_by_name')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListSortByName')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListSortByName $listSortByName = null;

    /**
     *
     * @var ?ListSortByUpdatedAt $listSortByUpdatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_sort_by_updated_at')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListSortByUpdatedAt')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListSortByUpdatedAt $listSortByUpdatedAt = null;

    /**
     *
     * @var ?ListSpaceId $listSpaceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_space_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListSpaceId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListSpaceId $listSpaceId = null;

    /**
     *
     * @var ?ListTicketId $listTicketId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_ticket_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListTicketId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListTicketId $listTicketId = null;

    /**
     *
     * @var ?ListType $listType
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListType')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListType $listType = null;

    /**
     *
     * @var ?ListUpdatedGte $listUpdatedGte
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_updated_gte')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListUpdatedGte')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListUpdatedGte $listUpdatedGte = null;

    /**
     *
     * @var ?ListUserId $listUserId
     */
    #[\JMS\Serializer\Annotation\SerializedName('list_user_id')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListUserId')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ListUserId $listUserId = null;

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

    /**
     * objects that we map from in the integration
     *
     * @var ?array<string> $rawObjects
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw_objects')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $rawObjects = null;

    /**
     *
     * @var ?SearchDomain $searchDomain
     */
    #[\JMS\Serializer\Annotation\SerializedName('search_domain')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\SearchDomain')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SearchDomain $searchDomain = null;

    /**
     *
     * @var ?SearchEmail $searchEmail
     */
    #[\JMS\Serializer\Annotation\SerializedName('search_email')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\SearchEmail')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SearchEmail $searchEmail = null;

    /**
     *
     * @var ?SearchLinkedinurl $searchLinkedinurl
     */
    #[\JMS\Serializer\Annotation\SerializedName('search_linkedinurl')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\SearchLinkedinurl')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SearchLinkedinurl $searchLinkedinurl = null;

    /**
     *
     * @var ?SearchName $searchName
     */
    #[\JMS\Serializer\Annotation\SerializedName('search_name')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\SearchName')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SearchName $searchName = null;

    /**
     *
     * @var ?SearchTwitter $searchTwitter
     */
    #[\JMS\Serializer\Annotation\SerializedName('search_twitter')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\SearchTwitter')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SearchTwitter $searchTwitter = null;

    /**
     *
     * @var ?PropertyIntegrationSupportWebhookEvents $webhookEvents
     */
    #[\JMS\Serializer\Annotation\SerializedName('webhook_events')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyIntegrationSupportWebhookEvents')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyIntegrationSupportWebhookEvents $webhookEvents = null;

    /**
     * @param  ?FromWebhook  $fromWebhook
     * @param  ?array<string, mixed>  $inboundFields
     * @param  ?ListAccountId  $listAccountId
     * @param  ?ListApplicationId  $listApplicationId
     * @param  ?ListCandidateId  $listCandidateId
     * @param  ?ListChannelId  $listChannelId
     * @param  ?ListCollectionId  $listCollectionId
     * @param  ?ListCompanyId  $listCompanyId
     * @param  ?ListContactId  $listContactId
     * @param  ?ListCustomerId  $listCustomerId
     * @param  ?ListDealId  $listDealId
     * @param  ?ListInterviewId  $listInterviewId
     * @param  ?ListInvoiceId  $listInvoiceId
     * @param  ?ListItemId  $listItemId
     * @param  ?ListItemVariantId  $listItemVariantId
     * @param  ?ListJobId  $listJobId
     * @param  ?ListLimit  $listLimit
     * @param  ?ListLinkId  $listLinkId
     * @param  ?ListListId  $listListId
     * @param  ?ListLocationId  $listLocationId
     * @param  ?ListOffset  $listOffset
     * @param  ?ListOrder  $listOrder
     * @param  ?ListParentId  $listParentId
     * @param  ?ListProjectId  $listProjectId
     * @param  ?ListQuery  $listQuery
     * @param  ?ListSortByCreatedAt  $listSortByCreatedAt
     * @param  ?ListSortByName  $listSortByName
     * @param  ?ListSortByUpdatedAt  $listSortByUpdatedAt
     * @param  ?ListSpaceId  $listSpaceId
     * @param  ?ListTicketId  $listTicketId
     * @param  ?ListType  $listType
     * @param  ?ListUpdatedGte  $listUpdatedGte
     * @param  ?ListUserId  $listUserId
     * @param  ?array<string, bool>  $methods
     * @param  ?array<string, mixed>  $outboundFields
     * @param  ?array<string>  $rawObjects
     * @param  ?SearchDomain  $searchDomain
     * @param  ?SearchEmail  $searchEmail
     * @param  ?SearchLinkedinurl  $searchLinkedinurl
     * @param  ?SearchName  $searchName
     * @param  ?SearchTwitter  $searchTwitter
     * @param  ?PropertyIntegrationSupportWebhookEvents  $webhookEvents
     */
    public function __construct(?FromWebhook $fromWebhook = null, ?array $inboundFields = null, ?ListAccountId $listAccountId = null, ?ListApplicationId $listApplicationId = null, ?ListCandidateId $listCandidateId = null, ?ListChannelId $listChannelId = null, ?ListCollectionId $listCollectionId = null, ?ListCompanyId $listCompanyId = null, ?ListContactId $listContactId = null, ?ListCustomerId $listCustomerId = null, ?ListDealId $listDealId = null, ?ListInterviewId $listInterviewId = null, ?ListInvoiceId $listInvoiceId = null, ?ListItemId $listItemId = null, ?ListItemVariantId $listItemVariantId = null, ?ListJobId $listJobId = null, ?ListLimit $listLimit = null, ?ListLinkId $listLinkId = null, ?ListListId $listListId = null, ?ListLocationId $listLocationId = null, ?ListOffset $listOffset = null, ?ListOrder $listOrder = null, ?ListParentId $listParentId = null, ?ListProjectId $listProjectId = null, ?ListQuery $listQuery = null, ?ListSortByCreatedAt $listSortByCreatedAt = null, ?ListSortByName $listSortByName = null, ?ListSortByUpdatedAt $listSortByUpdatedAt = null, ?ListSpaceId $listSpaceId = null, ?ListTicketId $listTicketId = null, ?ListType $listType = null, ?ListUpdatedGte $listUpdatedGte = null, ?ListUserId $listUserId = null, ?array $methods = null, ?array $outboundFields = null, ?array $rawObjects = null, ?SearchDomain $searchDomain = null, ?SearchEmail $searchEmail = null, ?SearchLinkedinurl $searchLinkedinurl = null, ?SearchName $searchName = null, ?SearchTwitter $searchTwitter = null, ?PropertyIntegrationSupportWebhookEvents $webhookEvents = null)
    {
        $this->fromWebhook = $fromWebhook;
        $this->inboundFields = $inboundFields;
        $this->listAccountId = $listAccountId;
        $this->listApplicationId = $listApplicationId;
        $this->listCandidateId = $listCandidateId;
        $this->listChannelId = $listChannelId;
        $this->listCollectionId = $listCollectionId;
        $this->listCompanyId = $listCompanyId;
        $this->listContactId = $listContactId;
        $this->listCustomerId = $listCustomerId;
        $this->listDealId = $listDealId;
        $this->listInterviewId = $listInterviewId;
        $this->listInvoiceId = $listInvoiceId;
        $this->listItemId = $listItemId;
        $this->listItemVariantId = $listItemVariantId;
        $this->listJobId = $listJobId;
        $this->listLimit = $listLimit;
        $this->listLinkId = $listLinkId;
        $this->listListId = $listListId;
        $this->listLocationId = $listLocationId;
        $this->listOffset = $listOffset;
        $this->listOrder = $listOrder;
        $this->listParentId = $listParentId;
        $this->listProjectId = $listProjectId;
        $this->listQuery = $listQuery;
        $this->listSortByCreatedAt = $listSortByCreatedAt;
        $this->listSortByName = $listSortByName;
        $this->listSortByUpdatedAt = $listSortByUpdatedAt;
        $this->listSpaceId = $listSpaceId;
        $this->listTicketId = $listTicketId;
        $this->listType = $listType;
        $this->listUpdatedGte = $listUpdatedGte;
        $this->listUserId = $listUserId;
        $this->methods = $methods;
        $this->outboundFields = $outboundFields;
        $this->rawObjects = $rawObjects;
        $this->searchDomain = $searchDomain;
        $this->searchEmail = $searchEmail;
        $this->searchLinkedinurl = $searchLinkedinurl;
        $this->searchName = $searchName;
        $this->searchTwitter = $searchTwitter;
        $this->webhookEvents = $webhookEvents;
    }
}
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
    #[\Speakeasy\Serializer\Annotation\SerializedName('from_webhook')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\FromWebhook|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?FromWebhook $fromWebhook = null;

    /**
     * $inboundFields
     *
     * @var ?array<string, mixed> $inboundFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('inbound_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $inboundFields = null;

    /**
     *
     * @var ?ListAccountId $listAccountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_account_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListAccountId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListAccountId $listAccountId = null;

    /**
     *
     * @var ?ListApplicationId $listApplicationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_application_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListApplicationId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListApplicationId $listApplicationId = null;

    /**
     *
     * @var ?ListCandidateId $listCandidateId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_candidate_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListCandidateId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListCandidateId $listCandidateId = null;

    /**
     *
     * @var ?ListChannelId $listChannelId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_channel_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListChannelId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListChannelId $listChannelId = null;

    /**
     *
     * @var ?ListClassId $listClassId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_class_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListClassId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListClassId $listClassId = null;

    /**
     *
     * @var ?ListCollectionId $listCollectionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_collection_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListCollectionId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListCollectionId $listCollectionId = null;

    /**
     *
     * @var ?ListCompanyId $listCompanyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_company_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListCompanyId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListCompanyId $listCompanyId = null;

    /**
     *
     * @var ?ListContactId $listContactId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_contact_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListContactId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListContactId $listContactId = null;

    /**
     *
     * @var ?ListCourseId $listCourseId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_course_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListCourseId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListCourseId $listCourseId = null;

    /**
     *
     * @var ?ListCustomerId $listCustomerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_customer_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListCustomerId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListCustomerId $listCustomerId = null;

    /**
     *
     * @var ?ListDealId $listDealId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_deal_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListDealId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListDealId $listDealId = null;

    /**
     *
     * @var ?ListInstructorId $listInstructorId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_instructor_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListInstructorId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListInstructorId $listInstructorId = null;

    /**
     *
     * @var ?ListInterviewId $listInterviewId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_interview_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListInterviewId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListInterviewId $listInterviewId = null;

    /**
     *
     * @var ?ListInvoiceId $listInvoiceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_invoice_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListInvoiceId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListInvoiceId $listInvoiceId = null;

    /**
     *
     * @var ?ListItemId $listItemId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_item_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListItemId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListItemId $listItemId = null;

    /**
     *
     * @var ?ListItemVariantId $listItemVariantId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_item_variant_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListItemVariantId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListItemVariantId $listItemVariantId = null;

    /**
     *
     * @var ?ListJobId $listJobId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_job_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListJobId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListJobId $listJobId = null;

    /**
     *
     * @var ?ListLimit $listLimit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_limit')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListLimit|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListLimit $listLimit = null;

    /**
     *
     * @var ?ListLinkId $listLinkId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_link_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListLinkId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListLinkId $listLinkId = null;

    /**
     *
     * @var ?ListListId $listListId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_list_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListListId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListListId $listListId = null;

    /**
     *
     * @var ?ListLocationId $listLocationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_location_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListLocationId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListLocationId $listLocationId = null;

    /**
     *
     * @var ?ListOffset $listOffset
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_offset')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListOffset|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListOffset $listOffset = null;

    /**
     *
     * @var ?ListOrder $listOrder
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_order')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListOrder|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListOrder $listOrder = null;

    /**
     *
     * @var ?ListParentId $listParentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_parent_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListParentId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListParentId $listParentId = null;

    /**
     *
     * @var ?ListProjectId $listProjectId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_project_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListProjectId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListProjectId $listProjectId = null;

    /**
     *
     * @var ?ListQuery $listQuery
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_query')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListQuery|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListQuery $listQuery = null;

    /**
     *
     * @var ?ListRawFields $listRawFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_raw_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListRawFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListRawFields $listRawFields = null;

    /**
     *
     * @var ?ListSortByCreatedAt $listSortByCreatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_sort_by_created_at')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListSortByCreatedAt|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListSortByCreatedAt $listSortByCreatedAt = null;

    /**
     *
     * @var ?ListSortByName $listSortByName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_sort_by_name')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListSortByName|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListSortByName $listSortByName = null;

    /**
     *
     * @var ?ListSortByUpdatedAt $listSortByUpdatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_sort_by_updated_at')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListSortByUpdatedAt|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListSortByUpdatedAt $listSortByUpdatedAt = null;

    /**
     *
     * @var ?ListSpaceId $listSpaceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_space_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListSpaceId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListSpaceId $listSpaceId = null;

    /**
     *
     * @var ?ListStudentId $listStudentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_student_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListStudentId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListStudentId $listStudentId = null;

    /**
     *
     * @var ?ListTicketId $listTicketId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_ticket_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListTicketId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListTicketId $listTicketId = null;

    /**
     *
     * @var ?ListType $listType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListType $listType = null;

    /**
     *
     * @var ?ListUpdatedGte $listUpdatedGte
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_updated_gte')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListUpdatedGte|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListUpdatedGte $listUpdatedGte = null;

    /**
     *
     * @var ?ListUserId $listUserId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('list_user_id')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ListUserId|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListUserId $listUserId = null;

    /**
     * $methods
     *
     * @var ?array<string, bool> $methods
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('methods')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, bool>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $methods = null;

    /**
     * $outboundFields
     *
     * @var ?array<string, mixed> $outboundFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('outbound_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $outboundFields = null;

    /**
     * objects that we map from in the integration
     *
     * @var ?array<string> $rawObjects
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw_objects')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $rawObjects = null;

    /**
     *
     * @var ?SearchDomain $searchDomain
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('search_domain')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\SearchDomain|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SearchDomain $searchDomain = null;

    /**
     *
     * @var ?SearchEmail $searchEmail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('search_email')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\SearchEmail|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SearchEmail $searchEmail = null;

    /**
     *
     * @var ?SearchLinkedinurl $searchLinkedinurl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('search_linkedinurl')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\SearchLinkedinurl|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SearchLinkedinurl $searchLinkedinurl = null;

    /**
     *
     * @var ?SearchName $searchName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('search_name')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\SearchName|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SearchName $searchName = null;

    /**
     *
     * @var ?SearchTwitter $searchTwitter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('search_twitter')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\SearchTwitter|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SearchTwitter $searchTwitter = null;

    /**
     *
     * @var ?PropertyIntegrationSupportWebhookEvents $webhookEvents
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('webhook_events')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyIntegrationSupportWebhookEvents|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyIntegrationSupportWebhookEvents $webhookEvents = null;

    /**
     * @param  ?FromWebhook  $fromWebhook
     * @param  ?array<string, mixed>  $inboundFields
     * @param  ?ListAccountId  $listAccountId
     * @param  ?ListApplicationId  $listApplicationId
     * @param  ?ListCandidateId  $listCandidateId
     * @param  ?ListChannelId  $listChannelId
     * @param  ?ListClassId  $listClassId
     * @param  ?ListCollectionId  $listCollectionId
     * @param  ?ListCompanyId  $listCompanyId
     * @param  ?ListContactId  $listContactId
     * @param  ?ListCourseId  $listCourseId
     * @param  ?ListCustomerId  $listCustomerId
     * @param  ?ListDealId  $listDealId
     * @param  ?ListInstructorId  $listInstructorId
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
     * @param  ?ListRawFields  $listRawFields
     * @param  ?ListSortByCreatedAt  $listSortByCreatedAt
     * @param  ?ListSortByName  $listSortByName
     * @param  ?ListSortByUpdatedAt  $listSortByUpdatedAt
     * @param  ?ListSpaceId  $listSpaceId
     * @param  ?ListStudentId  $listStudentId
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
    public function __construct(?FromWebhook $fromWebhook = null, ?array $inboundFields = null, ?ListAccountId $listAccountId = null, ?ListApplicationId $listApplicationId = null, ?ListCandidateId $listCandidateId = null, ?ListChannelId $listChannelId = null, ?ListClassId $listClassId = null, ?ListCollectionId $listCollectionId = null, ?ListCompanyId $listCompanyId = null, ?ListContactId $listContactId = null, ?ListCourseId $listCourseId = null, ?ListCustomerId $listCustomerId = null, ?ListDealId $listDealId = null, ?ListInstructorId $listInstructorId = null, ?ListInterviewId $listInterviewId = null, ?ListInvoiceId $listInvoiceId = null, ?ListItemId $listItemId = null, ?ListItemVariantId $listItemVariantId = null, ?ListJobId $listJobId = null, ?ListLimit $listLimit = null, ?ListLinkId $listLinkId = null, ?ListListId $listListId = null, ?ListLocationId $listLocationId = null, ?ListOffset $listOffset = null, ?ListOrder $listOrder = null, ?ListParentId $listParentId = null, ?ListProjectId $listProjectId = null, ?ListQuery $listQuery = null, ?ListRawFields $listRawFields = null, ?ListSortByCreatedAt $listSortByCreatedAt = null, ?ListSortByName $listSortByName = null, ?ListSortByUpdatedAt $listSortByUpdatedAt = null, ?ListSpaceId $listSpaceId = null, ?ListStudentId $listStudentId = null, ?ListTicketId $listTicketId = null, ?ListType $listType = null, ?ListUpdatedGte $listUpdatedGte = null, ?ListUserId $listUserId = null, ?array $methods = null, ?array $outboundFields = null, ?array $rawObjects = null, ?SearchDomain $searchDomain = null, ?SearchEmail $searchEmail = null, ?SearchLinkedinurl $searchLinkedinurl = null, ?SearchName $searchName = null, ?SearchTwitter $searchTwitter = null, ?PropertyIntegrationSupportWebhookEvents $webhookEvents = null)
    {
        $this->fromWebhook = $fromWebhook;
        $this->inboundFields = $inboundFields;
        $this->listAccountId = $listAccountId;
        $this->listApplicationId = $listApplicationId;
        $this->listCandidateId = $listCandidateId;
        $this->listChannelId = $listChannelId;
        $this->listClassId = $listClassId;
        $this->listCollectionId = $listCollectionId;
        $this->listCompanyId = $listCompanyId;
        $this->listContactId = $listContactId;
        $this->listCourseId = $listCourseId;
        $this->listCustomerId = $listCustomerId;
        $this->listDealId = $listDealId;
        $this->listInstructorId = $listInstructorId;
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
        $this->listRawFields = $listRawFields;
        $this->listSortByCreatedAt = $listSortByCreatedAt;
        $this->listSortByName = $listSortByName;
        $this->listSortByUpdatedAt = $listSortByUpdatedAt;
        $this->listSpaceId = $listSpaceId;
        $this->listStudentId = $listStudentId;
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
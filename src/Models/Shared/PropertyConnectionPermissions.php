<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


enum PropertyConnectionPermissions: string
{
    case AuthLogin = 'auth_login';
    case AccountingAccountRead = 'accounting_account_read';
    case AccountingAccountWrite = 'accounting_account_write';
    case AccountingTransactionRead = 'accounting_transaction_read';
    case AccountingTransactionWrite = 'accounting_transaction_write';
    case AccountingInvoiceRead = 'accounting_invoice_read';
    case AccountingInvoiceWrite = 'accounting_invoice_write';
    case AccountingCustomerRead = 'accounting_customer_read';
    case AccountingCustomerWrite = 'accounting_customer_write';
    case AccountingPaymentRead = 'accounting_payment_read';
    case AccountingPaymentWrite = 'accounting_payment_write';
    case AccountingTaxrateRead = 'accounting_taxrate_read';
    case AccountingTaxrateWrite = 'accounting_taxrate_write';
    case AccountingOrganizationRead = 'accounting_organization_read';
    case AccountingItemRead = 'accounting_item_read';
    case AtsScorecardRead = 'ats_scorecard_read';
    case AtsScorecardWrite = 'ats_scorecard_write';
    case AtsApplicationRead = 'ats_application_read';
    case AtsApplicationWrite = 'ats_application_write';
    case AtsApplicationstatusRead = 'ats_applicationstatus_read';
    case AtsCandidateRead = 'ats_candidate_read';
    case AtsCandidateWrite = 'ats_candidate_write';
    case AtsInterviewRead = 'ats_interview_read';
    case AtsInterviewWrite = 'ats_interview_write';
    case AtsJobRead = 'ats_job_read';
    case AtsJobWrite = 'ats_job_write';
    case AtsDocumentRead = 'ats_document_read';
    case AtsDocumentWrite = 'ats_document_write';
    case CrmCompanyRead = 'crm_company_read';
    case CrmCompanyWrite = 'crm_company_write';
    case CrmContactRead = 'crm_contact_read';
    case CrmContactWrite = 'crm_contact_write';
    case CrmDealRead = 'crm_deal_read';
    case CrmDealWrite = 'crm_deal_write';
    case CrmEventRead = 'crm_event_read';
    case CrmEventWrite = 'crm_event_write';
    case CrmLeadRead = 'crm_lead_read';
    case CrmLeadWrite = 'crm_lead_write';
    case CrmFileRead = 'crm_file_read';
    case CrmFileWrite = 'crm_file_write';
    case CrmPipelineRead = 'crm_pipeline_read';
    case CrmPipelineWrite = 'crm_pipeline_write';
    case MartechListRead = 'martech_list_read';
    case MartechListWrite = 'martech_list_write';
    case MartechMemberRead = 'martech_member_read';
    case MartechMemberWrite = 'martech_member_write';
    case TicketingCustomerRead = 'ticketing_customer_read';
    case TicketingCustomerWrite = 'ticketing_customer_write';
    case TicketingTicketRead = 'ticketing_ticket_read';
    case TicketingTicketWrite = 'ticketing_ticket_write';
    case TicketingNoteRead = 'ticketing_note_read';
    case TicketingNoteWrite = 'ticketing_note_write';
    case HrisEmployeeRead = 'hris_employee_read';
    case HrisEmployeeWrite = 'hris_employee_write';
    case HrisGroupRead = 'hris_group_read';
    case HrisGroupWrite = 'hris_group_write';
    case UcCallRead = 'uc_call_read';
    case StorageFileRead = 'storage_file_read';
    case StorageFileWrite = 'storage_file_write';
    case Webhook = 'webhook';
}

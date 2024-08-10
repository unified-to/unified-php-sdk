<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class UpdateAccountingJournalRequest
{
    /**
     *
     * @var ?Shared\AccountingJournal $accountingJournal
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\AccountingJournal $accountingJournal = null;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * ID of the Journal
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     * @param  ?string  $connectionId
     * @param  ?string  $id
     * @param  ?Shared\AccountingJournal  $accountingJournal
     */
    public function __construct(?string $connectionId = null, ?string $id = null, ?Shared\AccountingJournal $accountingJournal = null)
    {
        $this->connectionId = $connectionId;
        $this->id = $id;
        $this->accountingJournal = $accountingJournal;
    }
}
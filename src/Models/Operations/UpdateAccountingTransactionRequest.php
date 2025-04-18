<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class UpdateAccountingTransactionRequest
{
    /**
     *
     * @var Shared\AccountingTransaction $accountingTransaction
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\AccountingTransaction $accountingTransaction;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * ID of the Transaction
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     * @param  Shared\AccountingTransaction  $accountingTransaction
     * @param  string  $connectionId
     * @param  string  $id
     * @param  ?array<string>  $fields
     * @phpstan-pure
     */
    public function __construct(Shared\AccountingTransaction $accountingTransaction, string $connectionId, string $id, ?array $fields = null)
    {
        $this->accountingTransaction = $accountingTransaction;
        $this->connectionId = $connectionId;
        $this->id = $id;
        $this->fields = $fields;
    }
}
<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class CreateAccountingAccountRequest
{
    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * Chart of accounts
     *
     * @var ?Shared\AccountingAccount $accountingAccount
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\AccountingAccount $accountingAccount = null;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     * @param  string  $connectionId
     * @param  ?Shared\AccountingAccount  $accountingAccount
     * @param  ?array<string>  $fields
     * @phpstan-pure
     */
    public function __construct(string $connectionId, ?Shared\AccountingAccount $accountingAccount = null, ?array $fields = null)
    {
        $this->connectionId = $connectionId;
        $this->accountingAccount = $accountingAccount;
        $this->fields = $fields;
    }
}
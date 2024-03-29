<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingContactPaymentMethod
{
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\AccountingContactPaymentMethodType>')]
    public AccountingContactPaymentMethodType $type;
    
	public function __construct()
	{
		$this->name = null;
		$this->type = \Unified\Unified_to\Models\Shared\AccountingContactPaymentMethodType::Ach;
	}
}

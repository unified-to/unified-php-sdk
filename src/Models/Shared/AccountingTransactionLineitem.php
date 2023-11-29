<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingTransactionLineitem
{
	#[\JMS\Serializer\Annotation\SerializedName('customer_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $customerId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('invoice_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $invoiceId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('payment_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $paymentId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('tax_amount')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $taxAmount = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('total_amount')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $totalAmount;
    
	public function __construct()
	{
		$this->customerId = null;
		$this->description = null;
		$this->id = "";
		$this->invoiceId = null;
		$this->paymentId = null;
		$this->taxAmount = null;
		$this->totalAmount = 0;
	}
}

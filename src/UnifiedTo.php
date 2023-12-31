<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

/**
 * UnifiedTo - Unified.to API: One API to Rule Them All
 * 
 * @package Unified\Unified_to
 * @access public
 */
class UnifiedTo
{
	public const SERVERS = [
        /** North American data region */
		'https://api.unified.to',
        /** European data region */
		'https://api-eu.unified.to',
	];
  	
	public Accounting $accounting;
	
	public Account $account;
	
	public Customer $customer;
	
	public Invoice $invoice;
	
	public Item $item;
	
	public Organization $organization;
	
	public Payment $payment;
	
	public Taxrate $taxrate;
	
	public Transaction $transaction;
	
	public Ats $ats;
	
	public Application $application;
	
	public Applicationstatus $applicationstatus;
	
	public Candidate $candidate;
	
	public Document $document;
	
	public Interview $interview;
	
	public Job $job;
	
	public Scorecard $scorecard;
	
	public Crm $crm;
	
	public Company $company;
	
	public Contact $contact;
	
	public Deal $deal;
	
	public Event $event;
	
	public File $file;
	
	public Lead $lead;
	
	public Pipeline $pipeline;
	
	public Enrich $enrich;
	
	public Person $person;
	
	public Hris $hris;
	
	public Employee $employee;
	
	public Group $group;
	
	public Martech $martech;
	
	public ListT $list;
	
	public Member $member;
	
	public Passthrough $passthrough;
	
	public Storage $storage;
	
	public Ticketing $ticketing;
	
	public Note $note;
	
	public Ticket $ticket;
	
	public Uc $uc;
	
	public Call $call;
	
	public Unified $unified;
	
	public Apicall $apicall;
	
	public Connection $connection;
	
	public Integration $integration;
	
	public Auth $auth;
	
	public Login $login;
	
	public Webhook $webhook;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return UnifiedToBuilder
	 */
	public static function builder(): UnifiedToBuilder
	{
		return new UnifiedToBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->accounting = new Accounting($this->sdkConfiguration);
		
		$this->account = new Account($this->sdkConfiguration);
		
		$this->customer = new Customer($this->sdkConfiguration);
		
		$this->invoice = new Invoice($this->sdkConfiguration);
		
		$this->item = new Item($this->sdkConfiguration);
		
		$this->organization = new Organization($this->sdkConfiguration);
		
		$this->payment = new Payment($this->sdkConfiguration);
		
		$this->taxrate = new Taxrate($this->sdkConfiguration);
		
		$this->transaction = new Transaction($this->sdkConfiguration);
		
		$this->ats = new Ats($this->sdkConfiguration);
		
		$this->application = new Application($this->sdkConfiguration);
		
		$this->applicationstatus = new Applicationstatus($this->sdkConfiguration);
		
		$this->candidate = new Candidate($this->sdkConfiguration);
		
		$this->document = new Document($this->sdkConfiguration);
		
		$this->interview = new Interview($this->sdkConfiguration);
		
		$this->job = new Job($this->sdkConfiguration);
		
		$this->scorecard = new Scorecard($this->sdkConfiguration);
		
		$this->crm = new Crm($this->sdkConfiguration);
		
		$this->company = new Company($this->sdkConfiguration);
		
		$this->contact = new Contact($this->sdkConfiguration);
		
		$this->deal = new Deal($this->sdkConfiguration);
		
		$this->event = new Event($this->sdkConfiguration);
		
		$this->file = new File($this->sdkConfiguration);
		
		$this->lead = new Lead($this->sdkConfiguration);
		
		$this->pipeline = new Pipeline($this->sdkConfiguration);
		
		$this->enrich = new Enrich($this->sdkConfiguration);
		
		$this->person = new Person($this->sdkConfiguration);
		
		$this->hris = new Hris($this->sdkConfiguration);
		
		$this->employee = new Employee($this->sdkConfiguration);
		
		$this->group = new Group($this->sdkConfiguration);
		
		$this->martech = new Martech($this->sdkConfiguration);
		
		$this->list = new ListT($this->sdkConfiguration);
		
		$this->member = new Member($this->sdkConfiguration);
		
		$this->passthrough = new Passthrough($this->sdkConfiguration);
		
		$this->storage = new Storage($this->sdkConfiguration);
		
		$this->ticketing = new Ticketing($this->sdkConfiguration);
		
		$this->note = new Note($this->sdkConfiguration);
		
		$this->ticket = new Ticket($this->sdkConfiguration);
		
		$this->uc = new Uc($this->sdkConfiguration);
		
		$this->call = new Call($this->sdkConfiguration);
		
		$this->unified = new Unified($this->sdkConfiguration);
		
		$this->apicall = new Apicall($this->sdkConfiguration);
		
		$this->connection = new Connection($this->sdkConfiguration);
		
		$this->integration = new Integration($this->sdkConfiguration);
		
		$this->auth = new Auth($this->sdkConfiguration);
		
		$this->login = new Login($this->sdkConfiguration);
		
		$this->webhook = new Webhook($this->sdkConfiguration);
	}
}
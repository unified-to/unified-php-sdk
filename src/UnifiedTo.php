<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;



/** UnifiedTo - Unified.to API: One API to Rule Them All */
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

    public Contact $contact;

    public Invoice $invoice;

    public Journal $journal;

    public Order $order;

    public Organization $organization;

    public Taxrate $taxrate;

    public Transaction $transaction;

    public Ats $ats;

    public Activity $activity;

    public Application $application;

    public Applicationstatus $applicationstatus;

    public Candidate $candidate;

    public Company $company;

    public Document $document;

    public Interview $interview;

    public Job $job;

    public Scorecard $scorecard;

    public Commerce $commerce;

    public Collection $collection;

    public Inventory $inventory;

    public Item $item;

    public Location $location;

    public Crm $crm;

    public Deal $deal;

    public Event $event;

    public Lead $lead;

    public Pipeline $pipeline;

    public Enrich $enrich;

    public Person $person;

    public Genai $genai;

    public Model $model;

    public Prompt $prompt;

    public Hris $hris;

    public Employee $employee;

    public Group $group;

    public Payslip $payslip;

    public Timeoff $timeoff;

    public Kms $kms;

    public Page $page;

    public Space $space;

    public Lms $lms;

    public ClassT $class;

    public Course $course;

    public Instructor $instructor;

    public Student $student;

    public Martech $martech;

    public ListT $list;

    public Member $member;

    public Messaging $messaging;

    public Channel $channel;

    public Message $message;

    public Metadata $metadata;

    public Passthrough $passthrough;

    public Payment $payment;

    public Link $link;

    public Payout $payout;

    public Refund $refund;

    public Subscription $subscription;

    public Repo $repo;

    public Branch $branch;

    public Commit $commit;

    public Pullrequest $pullrequest;

    public Repository $repository;

    public Scim $scim;

    public User $user;

    public Storage $storage;

    public File $file;

    public Task $task;

    public Project $project;

    public Ticketing $ticketing;

    public Customer $customer;

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

    public Issue $issue;

    public Webhook $webhook;

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
     * @param  SDKConfiguration  $sdkConfiguration
     */
    public function __construct(
        public SDKConfiguration $sdkConfiguration,
    ) {
        $this->accounting = new Accounting($this->sdkConfiguration);
        $this->account = new Account($this->sdkConfiguration);
        $this->contact = new Contact($this->sdkConfiguration);
        $this->invoice = new Invoice($this->sdkConfiguration);
        $this->journal = new Journal($this->sdkConfiguration);
        $this->order = new Order($this->sdkConfiguration);
        $this->organization = new Organization($this->sdkConfiguration);
        $this->taxrate = new Taxrate($this->sdkConfiguration);
        $this->transaction = new Transaction($this->sdkConfiguration);
        $this->ats = new Ats($this->sdkConfiguration);
        $this->activity = new Activity($this->sdkConfiguration);
        $this->application = new Application($this->sdkConfiguration);
        $this->applicationstatus = new Applicationstatus($this->sdkConfiguration);
        $this->candidate = new Candidate($this->sdkConfiguration);
        $this->company = new Company($this->sdkConfiguration);
        $this->document = new Document($this->sdkConfiguration);
        $this->interview = new Interview($this->sdkConfiguration);
        $this->job = new Job($this->sdkConfiguration);
        $this->scorecard = new Scorecard($this->sdkConfiguration);
        $this->commerce = new Commerce($this->sdkConfiguration);
        $this->collection = new Collection($this->sdkConfiguration);
        $this->inventory = new Inventory($this->sdkConfiguration);
        $this->item = new Item($this->sdkConfiguration);
        $this->location = new Location($this->sdkConfiguration);
        $this->crm = new Crm($this->sdkConfiguration);
        $this->deal = new Deal($this->sdkConfiguration);
        $this->event = new Event($this->sdkConfiguration);
        $this->lead = new Lead($this->sdkConfiguration);
        $this->pipeline = new Pipeline($this->sdkConfiguration);
        $this->enrich = new Enrich($this->sdkConfiguration);
        $this->person = new Person($this->sdkConfiguration);
        $this->genai = new Genai($this->sdkConfiguration);
        $this->model = new Model($this->sdkConfiguration);
        $this->prompt = new Prompt($this->sdkConfiguration);
        $this->hris = new Hris($this->sdkConfiguration);
        $this->employee = new Employee($this->sdkConfiguration);
        $this->group = new Group($this->sdkConfiguration);
        $this->payslip = new Payslip($this->sdkConfiguration);
        $this->timeoff = new Timeoff($this->sdkConfiguration);
        $this->kms = new Kms($this->sdkConfiguration);
        $this->page = new Page($this->sdkConfiguration);
        $this->space = new Space($this->sdkConfiguration);
        $this->lms = new Lms($this->sdkConfiguration);
        $this->class = new ClassT($this->sdkConfiguration);
        $this->course = new Course($this->sdkConfiguration);
        $this->instructor = new Instructor($this->sdkConfiguration);
        $this->student = new Student($this->sdkConfiguration);
        $this->martech = new Martech($this->sdkConfiguration);
        $this->list = new ListT($this->sdkConfiguration);
        $this->member = new Member($this->sdkConfiguration);
        $this->messaging = new Messaging($this->sdkConfiguration);
        $this->channel = new Channel($this->sdkConfiguration);
        $this->message = new Message($this->sdkConfiguration);
        $this->metadata = new Metadata($this->sdkConfiguration);
        $this->passthrough = new Passthrough($this->sdkConfiguration);
        $this->payment = new Payment($this->sdkConfiguration);
        $this->link = new Link($this->sdkConfiguration);
        $this->payout = new Payout($this->sdkConfiguration);
        $this->refund = new Refund($this->sdkConfiguration);
        $this->subscription = new Subscription($this->sdkConfiguration);
        $this->repo = new Repo($this->sdkConfiguration);
        $this->branch = new Branch($this->sdkConfiguration);
        $this->commit = new Commit($this->sdkConfiguration);
        $this->pullrequest = new Pullrequest($this->sdkConfiguration);
        $this->repository = new Repository($this->sdkConfiguration);
        $this->scim = new Scim($this->sdkConfiguration);
        $this->user = new User($this->sdkConfiguration);
        $this->storage = new Storage($this->sdkConfiguration);
        $this->file = new File($this->sdkConfiguration);
        $this->task = new Task($this->sdkConfiguration);
        $this->project = new Project($this->sdkConfiguration);
        $this->ticketing = new Ticketing($this->sdkConfiguration);
        $this->customer = new Customer($this->sdkConfiguration);
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
        $this->issue = new Issue($this->sdkConfiguration);
        $this->webhook = new Webhook($this->sdkConfiguration);
        $this->sdkConfiguration->client = $this->sdkConfiguration->initHooks($this->sdkConfiguration->client);

    }
}
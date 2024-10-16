<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class ApiCall
{
    /**
     *
     * @var ?string $connectionId
     */
    #[\JMS\Serializer\Annotation\SerializedName('connection_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $connectionId = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $environment
     */
    #[\JMS\Serializer\Annotation\SerializedName('environment')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $environment = null;

    /**
     *
     * @var ?string $error
     */
    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     *
     * @var ?string $externalXref
     */
    #[\JMS\Serializer\Annotation\SerializedName('external_xref')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $externalXref = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var string $integrationType
     */
    #[\JMS\Serializer\Annotation\SerializedName('integration_type')]
    public string $integrationType;

    /**
     *
     * @var ?string $ipAddress
     */
    #[\JMS\Serializer\Annotation\SerializedName('ip_address')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $ipAddress = null;

    /**
     *
     * @var ?bool $isBillable
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_billable')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $isBillable = null;

    /**
     *
     * @var string $method
     */
    #[\JMS\Serializer\Annotation\SerializedName('method')]
    public string $method;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $path
     */
    #[\JMS\Serializer\Annotation\SerializedName('path')]
    public string $path;

    /**
     *
     * @var ?float $size
     */
    #[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $size = null;

    /**
     *
     * @var string $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    public string $status;

    /**
     *
     * @var ApiCallType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ApiCallType')]
    public ApiCallType $type;

    /**
     *
     * @var ?string $webhookId
     */
    #[\JMS\Serializer\Annotation\SerializedName('webhook_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $webhookId = null;

    /**
     *
     * @var ?string $workspaceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $workspaceId = null;

    /**
     * @param  string  $integrationType
     * @param  string  $method
     * @param  string  $name
     * @param  string  $path
     * @param  string  $status
     * @param  ApiCallType  $type
     * @param  ?string  $connectionId
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $environment
     * @param  ?string  $error
     * @param  ?string  $externalXref
     * @param  ?string  $id
     * @param  ?string  $ipAddress
     * @param  ?bool  $isBillable
     * @param  ?float  $size
     * @param  ?string  $webhookId
     * @param  ?string  $workspaceId
     */
    public function __construct(string $integrationType, string $method, string $name, string $path, string $status, ApiCallType $type, ?string $connectionId = null, ?\DateTime $createdAt = null, ?string $error = null, ?string $externalXref = null, ?string $id = null, ?string $ipAddress = null, ?bool $isBillable = null, ?float $size = null, ?string $webhookId = null, ?string $workspaceId = null, ?string $environment = 'Production')
    {
        $this->integrationType = $integrationType;
        $this->method = $method;
        $this->name = $name;
        $this->path = $path;
        $this->status = $status;
        $this->type = $type;
        $this->connectionId = $connectionId;
        $this->createdAt = $createdAt;
        $this->environment = $environment;
        $this->error = $error;
        $this->externalXref = $externalXref;
        $this->id = $id;
        $this->ipAddress = $ipAddress;
        $this->isBillable = $isBillable;
        $this->size = $size;
        $this->webhookId = $webhookId;
        $this->workspaceId = $workspaceId;
    }
}
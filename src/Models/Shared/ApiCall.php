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
     * @var string $integrationType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('integration_type')]
    public string $integrationType;

    /**
     *
     * @var string $method
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('method')]
    public string $method;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $path
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('path')]
    public string $path;

    /**
     *
     * @var string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    public string $status;

    /**
     *
     * @var ApiCallType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\ApiCallType')]
    public ApiCallType $type;

    /**
     *
     * @var ?string $connectionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('connection_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $connectionId = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     *
     * @var ?string $externalXref
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('external_xref')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $externalXref = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $ipAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ip_address')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ipAddress = null;

    /**
     *
     * @var ?bool $isBillable
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_billable')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isBillable = null;

    /**
     *
     * @var ?float $size
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('size')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $size = null;

    /**
     *
     * @var ?string $webhookId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('webhook_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $webhookId = null;

    /**
     *
     * @var ?string $workspaceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workspace_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $workspaceId = null;

    /**
     *
     * @var ?string $environment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('environment')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $environment = null;

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
     * @phpstan-pure
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
        $this->error = $error;
        $this->externalXref = $externalXref;
        $this->id = $id;
        $this->ipAddress = $ipAddress;
        $this->isBillable = $isBillable;
        $this->size = $size;
        $this->webhookId = $webhookId;
        $this->workspaceId = $workspaceId;
        $this->environment = $environment;
    }
}
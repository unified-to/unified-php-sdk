<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** PropertyScimUserUrnIetfParamsScimSchemasExtensionEnterprise20UserManager - "id" attribute of another User. */
class PropertyScimUserUrnIetfParamsScimSchemasExtensionEnterprise20UserManager
{
    /**
     *
     * @var ?string $dollarRef
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('$ref')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $dollarRef = null;

    /**
     *
     * @var ?string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('displayName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $displayName = null;

    /**
     *
     * @var ?string $managerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('managerId')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $managerId = null;

    /**
     *
     * @var ?PropertyScimUserUrnIetfParamsScimSchemasExtensionEnterprise20UserManagerType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyScimUserUrnIetfParamsScimSchemasExtensionEnterprise20UserManagerType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyScimUserUrnIetfParamsScimSchemasExtensionEnterprise20UserManagerType $type = null;

    /**
     *
     * @var ?string $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $value = null;

    /**
     * @param  ?string  $dollarRef
     * @param  ?string  $displayName
     * @param  ?string  $managerId
     * @param  ?PropertyScimUserUrnIetfParamsScimSchemasExtensionEnterprise20UserManagerType  $type
     * @param  ?string  $value
     */
    public function __construct(?string $dollarRef = null, ?string $displayName = null, ?string $managerId = null, ?PropertyScimUserUrnIetfParamsScimSchemasExtensionEnterprise20UserManagerType $type = null, ?string $value = null)
    {
        $this->dollarRef = $dollarRef;
        $this->displayName = $displayName;
        $this->managerId = $managerId;
        $this->type = $type;
        $this->value = $value;
    }
}
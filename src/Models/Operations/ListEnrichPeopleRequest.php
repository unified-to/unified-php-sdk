<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class ListEnrichPeopleRequest
{
    /**
     * The name of the company the person is associated with.  Not valid by itself.
     *
     * @var ?string $companyName
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=company_name')]
    public ?string $companyName = null;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * The email of the person to search
     *
     * @var ?string $email
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=email')]
    public ?string $email = null;

    /**
     * The LinkedIn URL of the person to search
     *
     * @var ?string $linkedinUrl
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=linkedin_url')]
    public ?string $linkedinUrl = null;

    /**
     * The name of the person to search
     *
     * @var ?string $name
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=name')]
    public ?string $name = null;

    /**
     * The twitter handle of the person to search
     *
     * @var ?string $twitter
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=twitter')]
    public ?string $twitter = null;

    /**
     * @param  ?string  $connectionId
     * @param  ?string  $companyName
     * @param  ?string  $email
     * @param  ?string  $linkedinUrl
     * @param  ?string  $name
     * @param  ?string  $twitter
     */
    public function __construct(?string $connectionId = null, ?string $companyName = null, ?string $email = null, ?string $linkedinUrl = null, ?string $name = null, ?string $twitter = null)
    {
        $this->connectionId = $connectionId;
        $this->companyName = $companyName;
        $this->email = $email;
        $this->linkedinUrl = $linkedinUrl;
        $this->name = $name;
        $this->twitter = $twitter;
    }
}
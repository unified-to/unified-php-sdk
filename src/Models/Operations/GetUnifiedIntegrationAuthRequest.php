<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class GetUnifiedIntegrationAuthRequest
{
    /**
     * Type of the supported integration
     *
     * @var string $integrationType
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=integration_type')]
    public string $integrationType;

    /**
     * The ID of the workspace
     *
     * @var string $workspaceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspace_id')]
    public string $workspaceId;

    /**
     *
     * @var ?string $env
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=env')]
    public ?string $env = null;

    /**
     * Your user identifier to associate with the new Integration
     *
     * @var ?string $externalXref
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=external_xref')]
    public ?string $externalXref = null;

    /**
     * The URL where you want the user to be redirect to after an unsuccessful authentication. An "error" variable will be appended.
     *
     * @var ?string $failureRedirect
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=failure_redirect')]
    public ?string $failureRedirect = null;

    /**
     * Language: en, fr, es, it, pt, zh, hi
     *
     * @var ?string $lang
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=lang')]
    public ?string $lang = null;

    /**
     *
     * @var ?bool $redirect
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=redirect')]
    public ?bool $redirect = null;

    /**
     * $scopes
     *
     * @var ?array<Scopes> $scopes
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=scopes')]
    public ?array $scopes = null;

    /**
     * Extra state to send back to your success URL
     *
     * @var ?string $state
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=state')]
    public ?string $state = null;

    /**
     *
     * @var ?string $subdomain
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=subdomain')]
    public ?string $subdomain = null;

    /**
     * The URL where you want the user to be redirect to after a successful authorization.  The connection ID will be appended with (id=<connectionId>) to this URL, as will the state that was provided.
     *
     * @var ?string $successRedirect
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=success_redirect')]
    public ?string $successRedirect = null;

    /**
     * @param  string  $integrationType
     * @param  string  $workspaceId
     * @param  ?string  $env
     * @param  ?string  $externalXref
     * @param  ?string  $failureRedirect
     * @param  ?string  $lang
     * @param  ?bool  $redirect
     * @param  ?array<Scopes>  $scopes
     * @param  ?string  $state
     * @param  ?string  $subdomain
     * @param  ?string  $successRedirect
     * @phpstan-pure
     */
    public function __construct(string $integrationType, string $workspaceId, ?string $env = null, ?string $externalXref = null, ?string $failureRedirect = null, ?string $lang = null, ?bool $redirect = null, ?array $scopes = null, ?string $state = null, ?string $subdomain = null, ?string $successRedirect = null)
    {
        $this->integrationType = $integrationType;
        $this->workspaceId = $workspaceId;
        $this->env = $env;
        $this->externalXref = $externalXref;
        $this->failureRedirect = $failureRedirect;
        $this->lang = $lang;
        $this->redirect = $redirect;
        $this->scopes = $scopes;
        $this->state = $state;
        $this->subdomain = $subdomain;
        $this->successRedirect = $successRedirect;
    }
}
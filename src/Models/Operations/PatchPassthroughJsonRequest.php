<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class PatchPassthroughJsonRequest
{
    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     *
     * @var string $path
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=path')]
    public string $path;

    /**
     * integration-specific payload
     *
     * @var mixed $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public mixed $requestBody = null;

    /**
     * @param  string  $connectionId
     * @param  string  $path
     * @param  mixed  $requestBody
     * @phpstan-pure
     */
    public function __construct(string $connectionId, string $path, mixed $requestBody = null)
    {
        $this->connectionId = $connectionId;
        $this->path = $path;
        $this->requestBody = $requestBody;
    }
}
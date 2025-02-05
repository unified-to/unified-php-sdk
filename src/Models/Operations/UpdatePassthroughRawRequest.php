<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Utils\SpeakeasyMetadata;
class UpdatePassthroughRawRequest
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
     * @var ?string $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=text/plain')]
    public ?string $requestBody = null;

    /**
     * @param  string  $connectionId
     * @param  string  $path
     * @param  ?string  $requestBody
     * @phpstan-pure
     */
    public function __construct(string $connectionId, string $path, ?string $requestBody = null)
    {
        $this->connectionId = $connectionId;
        $this->path = $path;
        $this->requestBody = $requestBody;
    }
}
<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class CreateCalendarEventRequest
{
    /**
     *
     * @var Shared\CalendarEvent $calendarEvent
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\CalendarEvent $calendarEvent;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     * @param  Shared\CalendarEvent  $calendarEvent
     * @param  string  $connectionId
     * @param  ?array<string>  $fields
     * @phpstan-pure
     */
    public function __construct(Shared\CalendarEvent $calendarEvent, string $connectionId, ?array $fields = null)
    {
        $this->calendarEvent = $calendarEvent;
        $this->connectionId = $connectionId;
        $this->fields = $fields;
    }
}
# UpdateCalendarEventRequest


## Fields

| Field                                                        | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `calendarEvent`                                              | [Shared\CalendarEvent](../../Models/Shared/CalendarEvent.md) | :heavy_check_mark:                                           | N/A                                                          |
| `connectionId`                                               | *string*                                                     | :heavy_check_mark:                                           | ID of the connection                                         |
| `id`                                                         | *string*                                                     | :heavy_check_mark:                                           | ID of the Event                                              |
| `fields`                                                     | array<*string*>                                              | :heavy_minus_sign:                                           | Comma-delimited fields to return                             |
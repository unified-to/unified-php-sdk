# PatchTicketingNoteRequest


## Fields

| Field                                                        | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `ticketingNote`                                              | [Shared\TicketingNote](../../Models/Shared/TicketingNote.md) | :heavy_check_mark:                                           | N/A                                                          |
| `connectionId`                                               | *string*                                                     | :heavy_check_mark:                                           | ID of the connection                                         |
| `fields`                                                     | array<*string*>                                              | :heavy_minus_sign:                                           | Comma-delimited fields to return                             |
| `id`                                                         | *string*                                                     | :heavy_check_mark:                                           | ID of the Note                                               |
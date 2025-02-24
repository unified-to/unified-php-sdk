# PatchTicketingTicketRequest


## Fields

| Field                                                            | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `ticketingTicket`                                                | [Shared\TicketingTicket](../../Models/Shared/TicketingTicket.md) | :heavy_check_mark:                                               | N/A                                                              |
| `connectionId`                                                   | *string*                                                         | :heavy_check_mark:                                               | ID of the connection                                             |
| `id`                                                             | *string*                                                         | :heavy_check_mark:                                               | ID of the Ticket                                                 |
| `fields`                                                         | array<*string*>                                                  | :heavy_minus_sign:                                               | Comma-delimited fields to return                                 |
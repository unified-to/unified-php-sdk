# UpdateTicketingTicketRequest


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `connectionId`                                                    | *string*                                                          | :heavy_check_mark:                                                | ID of the connection                                              |
| `id`                                                              | *string*                                                          | :heavy_check_mark:                                                | ID of the Ticket                                                  |
| `ticketingTicket`                                                 | [?Shared\TicketingTicket](../../Models/Shared/TicketingTicket.md) | :heavy_minus_sign:                                                | N/A                                                               |
| `fields`                                                          | array<*string*>                                                   | :heavy_minus_sign:                                                | Comma-delimited fields to return                                  |
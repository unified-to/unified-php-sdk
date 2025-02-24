# PatchTicketingCustomerRequest


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `ticketingCustomer`                                                  | [Shared\TicketingCustomer](../../Models/Shared/TicketingCustomer.md) | :heavy_check_mark:                                                   | N/A                                                                  |
| `connectionId`                                                       | *string*                                                             | :heavy_check_mark:                                                   | ID of the connection                                                 |
| `id`                                                                 | *string*                                                             | :heavy_check_mark:                                                   | ID of the Customer                                                   |
| `fields`                                                             | array<*string*>                                                      | :heavy_minus_sign:                                                   | Comma-delimited fields to return                                     |
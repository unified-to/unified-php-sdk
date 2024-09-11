# UpdatePaymentLinkRequest


## Fields

| Field                                                     | Type                                                      | Required                                                  | Description                                               |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| `connectionId`                                            | *string*                                                  | :heavy_check_mark:                                        | ID of the connection                                      |
| `id`                                                      | *string*                                                  | :heavy_check_mark:                                        | ID of the Link                                            |
| `paymentLink`                                             | [?Shared\PaymentLink](../../Models/Shared/PaymentLink.md) | :heavy_minus_sign:                                        | N/A                                                       |
| `fields`                                                  | array<*string*>                                           | :heavy_minus_sign:                                        | Comma-delimited fields to return                          |
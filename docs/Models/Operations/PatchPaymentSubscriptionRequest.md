# PatchPaymentSubscriptionRequest


## Fields

| Field                                                                     | Type                                                                      | Required                                                                  | Description                                                               |
| ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- |
| `connectionId`                                                            | *string*                                                                  | :heavy_check_mark:                                                        | ID of the connection                                                      |
| `id`                                                                      | *string*                                                                  | :heavy_check_mark:                                                        | ID of the Subscription                                                    |
| `paymentSubscription`                                                     | [?Shared\PaymentSubscription](../../Models/Shared/PaymentSubscription.md) | :heavy_minus_sign:                                                        | N/A                                                                       |
| `fields`                                                                  | array<*string*>                                                           | :heavy_minus_sign:                                                        | Comma-delimited fields to return                                          |
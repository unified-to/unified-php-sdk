# UpdatePaymentPaymentRequest


## Fields

| Field                                                          | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `paymentPayment`                                               | [Shared\PaymentPayment](../../Models/Shared/PaymentPayment.md) | :heavy_check_mark:                                             | N/A                                                            |
| `connectionId`                                                 | *string*                                                       | :heavy_check_mark:                                             | ID of the connection                                           |
| `id`                                                           | *string*                                                       | :heavy_check_mark:                                             | ID of the Payment                                              |
| `fields`                                                       | array<*string*>                                                | :heavy_minus_sign:                                             | Comma-delimited fields to return                               |
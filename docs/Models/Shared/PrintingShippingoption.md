# PrintingShippingoption

A shipping method available for a quote, with its price


## Fields

| Field                                                       | Type                                                        | Required                                                    | Description                                                 |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `amount`                                                    | *?float*                                                    | :heavy_minus_sign:                                          | Shipping price                                              |
| `code`                                                      | *?string*                                                   | :heavy_minus_sign:                                          | Shipping method code, used as `shipping_method` on an order |
| `currency`                                                  | *?string*                                                   | :heavy_minus_sign:                                          | ISO 4217 currency code                                      |
| `maxDeliveryDays`                                           | *?float*                                                    | :heavy_minus_sign:                                          | Estimated maximum number of days to delivery                |
| `minDeliveryDays`                                           | *?float*                                                    | :heavy_minus_sign:                                          | Estimated minimum number of days to delivery                |
| `name`                                                      | *?string*                                                   | :heavy_minus_sign:                                          | Display name                                                |
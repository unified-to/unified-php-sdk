# PropertyDmsVehiclesaleFinance

Finance or lease terms


## Fields

| Field                                                               | Type                                                                | Required                                                            | Description                                                         |
| ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- |
| `financedAmount`                                                    | *?float*                                                            | :heavy_minus_sign:                                                  | Amount financed                                                     |
| `firstPaymentAt`                                                    | [\DateTime](https://www.php.net/manual/en/class.datetime.php)       | :heavy_minus_sign:                                                  | First payment due date (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)     |
| `interestRate`                                                      | *?float*                                                            | :heavy_minus_sign:                                                  | APR, as a percentage                                                |
| `lenderName`                                                        | *?string*                                                           | :heavy_minus_sign:                                                  | Bank or finance company                                             |
| `moneyFactor`                                                       | *?float*                                                            | :heavy_minus_sign:                                                  | Lease money factor                                                  |
| `paymentAmount`                                                     | *?float*                                                            | :heavy_minus_sign:                                                  | Regular payment amount                                              |
| `paymentFrequency`                                                  | [?Shared\PaymentFrequency](../../Models/Shared/PaymentFrequency.md) | :heavy_minus_sign:                                                  | N/A                                                                 |
| `residualAmount`                                                    | *?float*                                                            | :heavy_minus_sign:                                                  | Lease residual or guaranteed future value                           |
| `termMonths`                                                        | *?float*                                                            | :heavy_minus_sign:                                                  | N/A                                                                 |
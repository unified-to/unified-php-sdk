# AccountingTransactionLineItem


## Fields

| Field                                                          | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `accountId`                                                    | *?string*                                                      | :heavy_minus_sign:                                             | (reference to AccountingAccount)                               |
| `categoryIds`                                                  | array<*string*>                                                | :heavy_minus_sign:                                             | N/A                                                            |
| `description`                                                  | *?string*                                                      | :heavy_minus_sign:                                             | N/A                                                            |
| `id`                                                           | *?string*                                                      | :heavy_minus_sign:                                             | N/A                                                            |
| `name`                                                         | *?string*                                                      | :heavy_minus_sign:                                             | N/A                                                            |
| `objectType`                                                   | *?string*                                                      | :heavy_minus_sign:                                             | N/A                                                            |
| `taxrateId`                                                    | *?string*                                                      | :heavy_minus_sign:                                             | ref -> AccountingTaxrate applied to the line                   |
| `totalAmount`                                                  | *?float*                                                       | :heavy_minus_sign:                                             | will be a positive value for a debit and negative for a credit |
| `unitAmount`                                                   | *?float*                                                       | :heavy_minus_sign:                                             | N/A                                                            |
| `unitQuantity`                                                 | *?float*                                                       | :heavy_minus_sign:                                             | N/A                                                            |
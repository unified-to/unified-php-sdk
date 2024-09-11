# CreateAccountingAccountRequest


## Fields

| Field                                                                 | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `connectionId`                                                        | *string*                                                              | :heavy_check_mark:                                                    | ID of the connection                                                  |
| `accountingAccount`                                                   | [?Shared\AccountingAccount](../../Models/Shared/AccountingAccount.md) | :heavy_minus_sign:                                                    | Chart of accounts                                                     |
| `fields`                                                              | array<*string*>                                                       | :heavy_minus_sign:                                                    | Comma-delimited fields to return                                      |
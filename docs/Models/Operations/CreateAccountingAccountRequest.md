# CreateAccountingAccountRequest


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `accountingAccount`                                                  | [Shared\AccountingAccount](../../Models/Shared/AccountingAccount.md) | :heavy_check_mark:                                                   | Chart of accounts                                                    |
| `connectionId`                                                       | *string*                                                             | :heavy_check_mark:                                                   | ID of the connection                                                 |
| `fields`                                                             | array<*string*>                                                      | :heavy_minus_sign:                                                   | Comma-delimited fields to return                                     |
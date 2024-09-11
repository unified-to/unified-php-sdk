# PatchCrmDealRequest


## Fields

| Field                                                           | Type                                                            | Required                                                        | Description                                                     |
| --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- |
| `connectionId`                                                  | *string*                                                        | :heavy_check_mark:                                              | ID of the connection                                            |
| `id`                                                            | *string*                                                        | :heavy_check_mark:                                              | ID of the Deal                                                  |
| `crmDeal`                                                       | [?Shared\CrmDeal](../../Models/Shared/CrmDeal.md)               | :heavy_minus_sign:                                              | A deal represents an opportunity with companies and/or contacts |
| `fields`                                                        | array<*string*>                                                 | :heavy_minus_sign:                                              | Comma-delimited fields to return                                |
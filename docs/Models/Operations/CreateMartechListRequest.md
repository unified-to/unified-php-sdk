# CreateMartechListRequest


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `connectionId`                                                | *string*                                                      | :heavy_check_mark:                                            | ID of the connection                                          |
| `marketingList`                                               | [?Shared\MarketingList](../../Models/Shared/MarketingList.md) | :heavy_minus_sign:                                            | Mailing List                                                  |
| `fields`                                                      | array<*string*>                                               | :heavy_minus_sign:                                            | Comma-delimited fields to return                              |
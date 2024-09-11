# CreateMartechMemberRequest


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `connectionId`                                                    | *string*                                                          | :heavy_check_mark:                                                | ID of the connection                                              |
| `marketingMember`                                                 | [?Shared\MarketingMember](../../Models/Shared/MarketingMember.md) | :heavy_minus_sign:                                                | A member represents a person                                      |
| `fields`                                                          | array<*string*>                                                   | :heavy_minus_sign:                                                | Comma-delimited fields to return                                  |
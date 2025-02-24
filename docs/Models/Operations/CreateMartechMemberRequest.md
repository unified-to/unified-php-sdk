# CreateMartechMemberRequest


## Fields

| Field                                                            | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `marketingMember`                                                | [Shared\MarketingMember](../../Models/Shared/MarketingMember.md) | :heavy_check_mark:                                               | A member represents a person                                     |
| `connectionId`                                                   | *string*                                                         | :heavy_check_mark:                                               | ID of the connection                                             |
| `fields`                                                         | array<*string*>                                                  | :heavy_minus_sign:                                               | Comma-delimited fields to return                                 |
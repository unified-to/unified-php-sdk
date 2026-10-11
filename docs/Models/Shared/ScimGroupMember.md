# ScimGroupMember


## Fields

| Field                                                                     | Type                                                                      | Required                                                                  | Description                                                               |
| ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- |
| `dollarRef`                                                               | *?string*                                                                 | :heavy_minus_sign:                                                        | url to user                                                               |
| `display`                                                                 | *?string*                                                                 | :heavy_minus_sign:                                                        | user name                                                                 |
| `operation`                                                               | [?Shared\Operation](../../Models/Shared/Operation.md)                     | :heavy_minus_sign:                                                        | ONLY USED ON UPDATES                                                      |
| `type`                                                                    | [?Shared\ScimGroupMemberType](../../Models/Shared/ScimGroupMemberType.md) | :heavy_minus_sign:                                                        | NOT STANDARD                                                              |
| `value`                                                                   | *string*                                                                  | :heavy_check_mark:                                                        | ID of user                                                                |
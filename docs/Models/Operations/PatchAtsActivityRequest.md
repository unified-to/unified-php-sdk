# PatchAtsActivityRequest


## Fields

| Field                                                     | Type                                                      | Required                                                  | Description                                               |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| `connectionId`                                            | *string*                                                  | :heavy_check_mark:                                        | ID of the connection                                      |
| `id`                                                      | *string*                                                  | :heavy_check_mark:                                        | ID of the Activity                                        |
| `atsActivity`                                             | [?Shared\AtsActivity](../../Models/Shared/AtsActivity.md) | :heavy_minus_sign:                                        | N/A                                                       |
| `fields`                                                  | array<*string*>                                           | :heavy_minus_sign:                                        | Comma-delimited fields to return                          |
# UpdateHrisEmployeeRequest


## Fields

| Field                                                      | Type                                                       | Required                                                   | Description                                                |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `hrisEmployee`                                             | [Shared\HrisEmployee](../../Models/Shared/HrisEmployee.md) | :heavy_check_mark:                                         | N/A                                                        |
| `connectionId`                                             | *string*                                                   | :heavy_check_mark:                                         | ID of the connection                                       |
| `id`                                                       | *string*                                                   | :heavy_check_mark:                                         | ID of the Employee                                         |
| `fields`                                                   | array<*string*>                                            | :heavy_minus_sign:                                         | Comma-delimited fields to return                           |
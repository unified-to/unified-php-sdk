# Issue


## Fields

| Field                                                    | Type                                                     | Required                                                 | Description                                              |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| `createdAt`                                              | *?string*                                                | :heavy_minus_sign:                                       | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                 |
| `customerNote`                                           | *?string*                                                | :heavy_minus_sign:                                       | N/A                                                      |
| `id`                                                     | *?string*                                                | :heavy_minus_sign:                                       | N/A                                                      |
| `importance`                                             | *?float*                                                 | :heavy_minus_sign:                                       | 1-5, 1 is lowest                                         |
| `resolutionTime`                                         | *?float*                                                 | :heavy_minus_sign:                                       | N/A                                                      |
| `size`                                                   | *?float*                                                 | :heavy_minus_sign:                                       | 1-5, 1 is lowest                                         |
| `status`                                                 | [Shared\IssueStatus](../../Models/Shared/IssueStatus.md) | :heavy_check_mark:                                       | N/A                                                      |
| `ticketRef`                                              | *string*                                                 | :heavy_check_mark:                                       | N/A                                                      |
| `title`                                                  | *string*                                                 | :heavy_check_mark:                                       | N/A                                                      |
| `type`                                                   | array<*string*>                                          | :heavy_minus_sign:                                       | N/A                                                      |
| `updatedAt`                                              | *?string*                                                | :heavy_minus_sign:                                       | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                 |
| `url`                                                    | *?string*                                                | :heavy_minus_sign:                                       | N/A                                                      |
| `workspaceId`                                            | *string*                                                 | :heavy_check_mark:                                       | (reference to KmsSpace)                                  |
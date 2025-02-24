# UpdateCrmLeadRequest


## Fields

| Field                                            | Type                                             | Required                                         | Description                                      |
| ------------------------------------------------ | ------------------------------------------------ | ------------------------------------------------ | ------------------------------------------------ |
| `crmLead`                                        | [Shared\CrmLead](../../Models/Shared/CrmLead.md) | :heavy_check_mark:                               | N/A                                              |
| `connectionId`                                   | *string*                                         | :heavy_check_mark:                               | ID of the connection                             |
| `id`                                             | *string*                                         | :heavy_check_mark:                               | ID of the Lead                                   |
| `fields`                                         | array<*string*>                                  | :heavy_minus_sign:                               | Comma-delimited fields to return                 |
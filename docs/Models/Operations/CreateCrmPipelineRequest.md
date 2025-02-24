# CreateCrmPipelineRequest


## Fields

| Field                                                    | Type                                                     | Required                                                 | Description                                              |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| `crmPipeline`                                            | [Shared\CrmPipeline](../../Models/Shared/CrmPipeline.md) | :heavy_check_mark:                                       | N/A                                                      |
| `connectionId`                                           | *string*                                                 | :heavy_check_mark:                                       | ID of the connection                                     |
| `fields`                                                 | array<*string*>                                          | :heavy_minus_sign:                                       | Comma-delimited fields to return                         |
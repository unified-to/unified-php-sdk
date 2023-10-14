# CreateAtsJobRequest


## Fields

| Field                                                                      | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `atsJob`                                                                   | [?\Unified\Unified_to\Models\Shared\AtsJob](../../models/shared/AtsJob.md) | :heavy_minus_sign:                                                         | An opened position/job                                                     |
| `connectionId`                                                             | *string*                                                                   | :heavy_check_mark:                                                         | ID of the connection                                                       |
| `fields`                                                                   | array<*string*>                                                            | :heavy_minus_sign:                                                         | Comma-delimited fields to return                                           |
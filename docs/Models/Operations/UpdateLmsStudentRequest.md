# UpdateLmsStudentRequest


## Fields

| Field                                                  | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `lmsStudent`                                           | [Shared\LmsStudent](../../Models/Shared/LmsStudent.md) | :heavy_check_mark:                                     | N/A                                                    |
| `connectionId`                                         | *string*                                               | :heavy_check_mark:                                     | ID of the connection                                   |
| `id`                                                   | *string*                                               | :heavy_check_mark:                                     | ID of the Student                                      |
| `fields`                                               | array<*string*>                                        | :heavy_minus_sign:                                     | Comma-delimited fields to return                       |
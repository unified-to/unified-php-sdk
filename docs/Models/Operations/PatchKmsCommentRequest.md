# PatchKmsCommentRequest


## Fields

| Field                                                  | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `kmsComment`                                           | [Shared\KmsComment](../../Models/Shared/KmsComment.md) | :heavy_check_mark:                                     | N/A                                                    |
| `connectionId`                                         | *string*                                               | :heavy_check_mark:                                     | ID of the connection                                   |
| `id`                                                   | *string*                                               | :heavy_check_mark:                                     | ID of the Comment                                      |
| `fields`                                               | array<*string*>                                        | :heavy_minus_sign:                                     | Comma-delimited fields to return                       |
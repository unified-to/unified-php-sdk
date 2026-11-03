# PlmCategory

A category that parts, documents or changes are filed under


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `createdAt`                                                       | [\DateTime](https://www.php.net/manual/en/class.datetime.php)     | :heavy_minus_sign:                                                | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                          |
| `description`                                                     | *?string*                                                         | :heavy_minus_sign:                                                | N/A                                                               |
| `id`                                                              | *?string*                                                         | :heavy_minus_sign:                                                | N/A                                                               |
| `isActive`                                                        | *?bool*                                                           | :heavy_minus_sign:                                                | N/A                                                               |
| `metadata`                                                        | array<[Shared\PlmMetadata](../../Models/Shared/PlmMetadata.md)>   | :heavy_minus_sign:                                                | N/A                                                               |
| `name`                                                            | *?string*                                                         | :heavy_minus_sign:                                                | N/A                                                               |
| `parentId`                                                        | *?string*                                                         | :heavy_minus_sign:                                                | The parent PlmCategory, for nested categories                     |
| `raw`                                                             | array<string, *mixed*>                                            | :heavy_minus_sign:                                                | Raw data from integration                                         |
| `type`                                                            | [?Shared\PlmCategoryType](../../Models/Shared/PlmCategoryType.md) | :heavy_minus_sign:                                                | Which records the category classifies                             |
| `updatedAt`                                                       | [\DateTime](https://www.php.net/manual/en/class.datetime.php)     | :heavy_minus_sign:                                                | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                          |
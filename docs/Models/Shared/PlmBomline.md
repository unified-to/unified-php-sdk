# PlmBomline

One parent to child usage in a bill of materials


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `childPartId`                                                 | *?string*                                                     | :heavy_minus_sign:                                            | The component's PlmPart ID (a revision ID)                    |
| `childRevision`                                               | *?string*                                                     | :heavy_minus_sign:                                            | Pinned child revision, when the line pins one                 |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `effectiveAt`                                                 | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `expiresAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `id`                                                          | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `lineNumber`                                                  | *?string*                                                     | :heavy_minus_sign:                                            | Find or item number on the BOM                                |
| `notes`                                                       | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `parentPartId`                                                | *?string*                                                     | :heavy_minus_sign:                                            | The assembly                                                  |
| `quantity`                                                    | *?float*                                                      | :heavy_minus_sign:                                            | N/A                                                           |
| `raw`                                                         | array<string, *mixed*>                                        | :heavy_minus_sign:                                            | Raw data from integration                                     |
| `referenceDesignators`                                        | array<*string*>                                               | :heavy_minus_sign:                                            | N/A                                                           |
| `unitOfMeasure`                                               | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `updatedAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
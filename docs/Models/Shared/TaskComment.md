# TaskComment


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `hasChildren`                                                 | *?bool*                                                       | :heavy_minus_sign:                                            | N/A                                                           |
| `id`                                                          | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `parentId`                                                    | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `raw`                                                         | array<string, *mixed*>                                        | :heavy_minus_sign:                                            | N/A                                                           |
| `taskId`                                                      | *?string*                                                     | :heavy_minus_sign:                                            | (reference to TaskTask)                                       |
| `text`                                                        | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `updatedAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `userId`                                                      | *?string*                                                     | :heavy_minus_sign:                                            | (reference to HrisEmployee)                                   |
| `userName`                                                    | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
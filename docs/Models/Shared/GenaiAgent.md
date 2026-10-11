# GenaiAgent


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `description`                                                 | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `id`                                                          | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `instructions`                                                | *?string*                                                     | :heavy_minus_sign:                                            | The system prompt or stored procedure that the agent follows. |
| `isActive`                                                    | *?bool*                                                       | :heavy_minus_sign:                                            | N/A                                                           |
| `modelId`                                                     | *?string*                                                     | :heavy_minus_sign:                                            | The model that the agent runs on.                             |
| `name`                                                        | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `raw`                                                         | array<string, *mixed*>                                        | :heavy_minus_sign:                                            | N/A                                                           |
| `updatedAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
# RepoBranch


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `id`                                                          | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `name`                                                        | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `raw`                                                         | array<string, *mixed*>                                        | :heavy_minus_sign:                                            | N/A                                                           |
| `repoId`                                                      | *string*                                                      | :heavy_check_mark:                                            | (reference to RepoRepository)                                 |
| `updatedAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
# EnrichPersonWorkHistory


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `companyDomain`                                               | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `companyId`                                                   | *?string*                                                     | :heavy_minus_sign:                                            | (reference to EnrichCompany)                                  |
| `companyName`                                                 | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `endAt`                                                       | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `location`                                                    | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `startAt`                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `title`                                                       | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
# MarketingReportLink


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `clickPercentage`                                             | *?float*                                                      | :heavy_minus_sign:                                            | Percentage of total clicks                                    |
| `lastClickAt`                                                 | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | Last click timestamp (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format) |
| `totalClicks`                                                 | *?float*                                                      | :heavy_minus_sign:                                            | Total clicks on this link                                     |
| `uniqueClickPercentage`                                       | *?float*                                                      | :heavy_minus_sign:                                            | Percentage of unique clicks                                   |
| `uniqueClicks`                                                | *?float*                                                      | :heavy_minus_sign:                                            | Unique clicks on this link                                    |
| `url`                                                         | *?string*                                                     | :heavy_minus_sign:                                            | The URL                                                       |
# HrisAttendanceBreak


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `durationMinutes`                                             | *?float*                                                      | :heavy_minus_sign:                                            | N/A                                                           |
| `endAt`                                                       | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `id`                                                          | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `isPaid`                                                      | *?bool*                                                       | :heavy_minus_sign:                                            | N/A                                                           |
| `name`                                                        | *?string*                                                     | :heavy_minus_sign:                                            | break type label, e.g. "Lunch"                                |
| `startAt`                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
# AdSchedule


## Fields

| Field                                                | Type                                                 | Required                                             | Description                                          |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `bidModifier`                                        | *?float*                                             | :heavy_minus_sign:                                   | 0.1-10.0                                             |
| `dayOfWeek`                                          | [Shared\DayOfWeek](../../Models/Shared/DayOfWeek.md) | :heavy_check_mark:                                   | N/A                                                  |
| `endHour`                                            | *float*                                              | :heavy_check_mark:                                   | 0-24 (24 = end of day)                               |
| `endMinute`                                          | *?float*                                             | :heavy_minus_sign:                                   | 0, 15, 30, 45                                        |
| `startHour`                                          | *float*                                              | :heavy_check_mark:                                   | 0-23                                                 |
| `startMinute`                                        | *?float*                                             | :heavy_minus_sign:                                   | 0, 15, 30, 45                                        |
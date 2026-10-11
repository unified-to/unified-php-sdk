# AtsJobOpening


## Fields

| Field                                                                     | Type                                                                      | Required                                                                  | Description                                                               |
| ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- |
| `applicationId`                                                           | *?string*                                                                 | :heavy_minus_sign:                                                        | points to an application                                                  |
| `closeReason`                                                             | *?string*                                                                 | :heavy_minus_sign:                                                        | N/A                                                                       |
| `closedAt`                                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php)             | :heavy_minus_sign:                                                        | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                                  |
| `openedAt`                                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php)             | :heavy_minus_sign:                                                        | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                                  |
| `status`                                                                  | [?Shared\AtsJobOpeningStatus](../../Models/Shared/AtsJobOpeningStatus.md) | :heavy_minus_sign:                                                        | N/A                                                                       |
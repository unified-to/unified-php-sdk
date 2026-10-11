# UcRecordingTranscript


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `contactId`                                                   | *?string*                                                     | :heavy_minus_sign:                                            | (reference to UcContact)                                      |
| `endAt`                                                       | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `startAt`                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `text`                                                        | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `userId`                                                      | *?string*                                                     | :heavy_minus_sign:                                            | reference to HrisEmployee (reference to HrisEmployee)         |
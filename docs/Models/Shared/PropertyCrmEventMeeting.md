# PropertyCrmEventMeeting

The meeting object, when type = meeting


## Fields

| Field                                                                       | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `description`                                                               | *?string*                                                                   | :heavy_minus_sign:                                                          | The event meeting's agendadescription                                       |
| `endAt`                                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php)               | :heavy_minus_sign:                                                          | The event meeting's end datetime (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)   |
| `startAt`                                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php)               | :heavy_minus_sign:                                                          | The event meeting's start datetime (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format) |
| `title`                                                                     | *?string*                                                                   | :heavy_minus_sign:                                                          | The event meeting's topicsubject                                            |
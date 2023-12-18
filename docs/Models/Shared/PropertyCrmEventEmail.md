# PropertyCrmEventEmail

The email object, when type = email


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `body`                                                        | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `cc`                                                          | array<*string*>                                               | :heavy_minus_sign:                                            | The event email's cc name & email (name <test@test.com>)      |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | N/A                                                           |
| `from`                                                        | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `subject`                                                     | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `to`                                                          | array<*string*>                                               | :heavy_minus_sign:                                            | The event email's to name & email (name <test@test.com>)      |
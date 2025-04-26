# UcContact

A contact represents a person that optionally is associated with a call


## Fields

| Field                                                           | Type                                                            | Required                                                        | Description                                                     |
| --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- |
| `company`                                                       | *?string*                                                       | :heavy_minus_sign:                                              | N/A                                                             |
| `createdAt`                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php)   | :heavy_minus_sign:                                              | N/A                                                             |
| `emails`                                                        | array<[Shared\UcEmail](../../Models/Shared/UcEmail.md)>         | :heavy_minus_sign:                                              | An array of email addresses for this contact                    |
| `id`                                                            | *?string*                                                       | :heavy_minus_sign:                                              | N/A                                                             |
| `name`                                                          | *?string*                                                       | :heavy_minus_sign:                                              | N/A                                                             |
| `raw`                                                           | array<string, *mixed*>                                          | :heavy_minus_sign:                                              | N/A                                                             |
| `telephones`                                                    | array<[Shared\UcTelephone](../../Models/Shared/UcTelephone.md)> | :heavy_minus_sign:                                              | An array of telephones for this contact                         |
| `title`                                                         | *?string*                                                       | :heavy_minus_sign:                                              | N/A                                                             |
| `updatedAt`                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php)   | :heavy_minus_sign:                                              | N/A                                                             |
# UcAgent

Represents an agent


## Fields

| Field                                                           | Type                                                            | Required                                                        | Description                                                     |
| --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- |
| `createdAt`                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php)   | :heavy_minus_sign:                                              | N/A                                                             |
| `emails`                                                        | array<[UcEmail](../../models/shared/UcEmail.md)>                | :heavy_minus_sign:                                              | An array of email addresses for this agent                      |
| `id`                                                            | *?string*                                                       | :heavy_minus_sign:                                              | N/A                                                             |
| `name`                                                          | *?string*                                                       | :heavy_minus_sign:                                              | N/A                                                             |
| `raw`                                                           | [PropertyUcAgentRaw](../../models/shared/PropertyUcAgentRaw.md) | :heavy_check_mark:                                              | The raw data returned by the integration for this agent         |
| `telephones`                                                    | array<[UcTelephone](../../models/shared/UcTelephone.md)>        | :heavy_minus_sign:                                              | N/A                                                             |
| `updatedAt`                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php)   | :heavy_minus_sign:                                              | N/A                                                             |
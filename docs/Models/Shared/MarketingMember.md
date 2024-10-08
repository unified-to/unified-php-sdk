# MarketingMember

A member represents a person


## Fields

| Field                                                                 | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `createdAt`                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)         | :heavy_minus_sign:                                                    | N/A                                                                   |
| `emails`                                                              | array<[Shared\MarketingEmail](../../Models/Shared/MarketingEmail.md)> | :heavy_minus_sign:                                                    | An array of email addresses for this member                           |
| `id`                                                                  | *?string*                                                             | :heavy_minus_sign:                                                    | N/A                                                                   |
| `listIds`                                                             | array<*string*>                                                       | :heavy_minus_sign:                                                    | An array of list IDs associated with this member                      |
| `name`                                                                | *?string*                                                             | :heavy_minus_sign:                                                    | N/A                                                                   |
| `raw`                                                                 | array<string, *mixed*>                                                | :heavy_minus_sign:                                                    | The raw data returned by the integration for this member              |
| `tags`                                                                | array<*string*>                                                       | :heavy_minus_sign:                                                    | An array of tags associated with this member                          |
| `updatedAt`                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)         | :heavy_minus_sign:                                                    | N/A                                                                   |